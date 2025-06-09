<?php

namespace App\Http\Controllers;

use App\Models\CustomizedLink;
use App\Http\Requests\StoreCustomizedLinkRequest;
use App\Http\Requests\UpdateCustomizedLinkRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class CustomizedLinkController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'Link' => ['required', 'unique:'.CustomizedLink::class],
            'Source' => ['required']
        ], [
            'Link.required' => 'Link kustom harus diisi!',
            'Link.unique' => 'Link kustom ini tidak tersedia!',
            'Source.required' => 'Link awal harus diisi!'
        ]);

        $source = $request->Source;

        if (!preg_match('/^https:\/\//', $source)) {
            $source = 'https://' . $source;
        }

        if (auth()->user()) {
            CustomizedLink::create([
                'Link' => $request->Link,
                'Source' => $source,
                'CreatedBy' => auth()->user()->id
            ]);
        } else {
            CustomizedLink::create([
                'Link' => $request->Link,
                'Source' => $source
            ]);
        }

        $link = 'https://pendekinlink.id/'.$request->Link;
        return redirect('/')->with('success', $link);
    }

    public function shortenInBulkStore(Request $request) {
        $validated = $request->validate([
            'Bulks' => ['required', 'array', 'min:1', 'max:10'],
            'Bulks.*.Link' => ['required', 'unique:'.CustomizedLink::class],
            'Bulks.*.Source' => ['required']
        ], [
            'Bulks.*.Source.required' => 'The Source field is required.',
            'Bulks.*.Link.required' => 'The Link field is required.',
            'Bulks.*.Link.unique' => 'The Link has already been taken.'
        ]);

        $bulks = $request->input('Bulks');
        $links = array_column($bulks, 'Link');
        
        if (count($links) !== count(array_unique($links))) {
            return redirect()->back()->withErrors(['Bulks' => 'Duplicate Links are not allowed.'])->withInput();
        }

        foreach ($validated['Bulks'] as $Bulk) {
            if (!preg_match('/^https:\/\//', $Bulk['Source'])) {
                $Bulk['Source'] = 'https://' . $Bulk['Source'];
            }
            if (auth()->user()) {
                $Bulk['CreatedBy'] = auth()->user()->id;
            }
            CustomizedLink::create($Bulk);
        }

        Cookie::expire('bulk');

        return redirect('/shorten-in-bulk')->with('success', $validated['Bulks']);
    }
    
    public function redirect($link) {
        $Link = CustomizedLink::where('Link', $link);
        if ($Link->exists()) {
            $customizedLink = $Link->first();
            $totalVisited = $customizedLink->TotalVisited+1;
            $customizedLink->update([
                'TotalVisited' => $totalVisited
            ]);
            return redirect($customizedLink->Source);
        }
        return abort(404);
    }

    public function generateRandomLink(Request $request) {
        do {
            $randomLink = Str::random(10);
        } while(CustomizedLink::where('Link', $randomLink)->exists());
        
        return redirect()->back()->with([
            'randomLink' => $randomLink,
            'oldSource' => $request->Source2
        ]);
    }

    public function getHistory() {
        $customizedLinks = CustomizedLink::where('CreatedBy', auth()->user()->id)->get();
        $categories = Category::where('CreatedBy', auth()->user()->id)->get();
        $exists = CustomizedLink::where('CreatedBy', auth()->user()->id)->exists();
        return view('history', compact('customizedLinks', 'categories', 'exists'));
    }

    public function getHistoryPage($categoryId) {
        if (!CustomizedLink::where('CreatedBy', auth()->user()->id)->where('CategoryId', $categoryId)->exists()) {
            return redirect('/history')->with('categorizedLinkNull', 'Belum ada link yang ditambahkan ke kategori ini!');
        }
        $customizedLinks = CustomizedLink::where('CreatedBy', auth()->user()->id)->where('CategoryId', $categoryId)->get();
        $categories = Category::where('CreatedBy', auth()->user()->id)->get();
        $exists = CustomizedLink::where('CreatedBy', auth()->user()->id)->exists();
        return view('history', compact('customizedLinks', 'categories', 'exists'));
    }

    public function addLinkCategory($linkId, $categoryId) {
        $customizedLink = CustomizedLink::findOrFail($linkId);
        if ($customizedLink->CreatedBy != auth()->user()->id) {
            return abort(404);
        }
        $customizedLink->update([
            'CategoryId' => $categoryId
        ]);
        return redirect('/history');
    }

    public function getEditLink($id) {
        $customizedLink = CustomizedLink::findOrFail($id);
        if ($customizedLink->CreatedBy != auth()->user()->id) {
            return abort(404);
        }
        return view('editLink', compact('customizedLink'));
    }
    
    public function updateLink(Request $request, $id) {
        $customizedLink = CustomizedLink::findOrFail($id);
        if ($customizedLink->CreatedBy != auth()->user()->id) {
            return abort(404);
        }

        $request->validate([
            'Link' => ['required', 'unique:'.CustomizedLink::class],
            'Source' => ['required']
        ]);

        $source = $request->Source;

        if (!preg_match('/^https:\/\//', $source)) {
            $source = 'https://' . $source;
        }

        $customizedLink->update([
            'Link' => $request->Link,
            'Source' => $source
        ]);

        return redirect('/history');
    }

    public function getShortenInBulk() {
        return view('shortenInBulk');
    }

    public function storeShortenInBulk(Request $request) {
        $request->validate([
            'Bulk' => ['required', 'integer', 'min:1', 'max:10']
        ]);

        $bulk = $request->Bulk;
        Cookie::queue('bulk', $bulk);
        
        return redirect('/shorten-in-bulk');
    }

    public function editBulk() {
        Cookie::expire('bulk');
        return redirect('/shorten-in-bulk');
    }
}
