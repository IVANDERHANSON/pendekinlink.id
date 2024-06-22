<?php

namespace App\Http\Controllers;

use App\Models\CustomizedLink;
use App\Http\Requests\StoreCustomizedLinkRequest;
use App\Http\Requests\UpdateCustomizedLinkRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CustomizedLinkController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'Link' => ['required', 'unique:'.CustomizedLink::class],
            'Source' => ['required']
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
    
    public function redirect($link) {
        $Link = CustomizedLink::where('Link', $link);
        if ($Link->exists()) {
            return redirect($Link->first()->Source);
        }
        return abort(404);
    }

    public function generateRandomLink() {
        do {
            $randomLink = Str::random(10);
        } while(CustomizedLink::where('Link', $randomLink)->exists());
        return redirect()->back()->with('randomLink', $randomLink);
    }

    public function getHistory() {
        $customizedLinks = CustomizedLink::where('CreatedBy', auth()->user()->id)->get();
        return view('history', compact('customizedLinks'));
    }

    public function getEditLink($id) {
        $customizedLink = CustomizedLink::find($id);
        if ($customizedLink->CreatedBy != auth()->user()->id) {
            return abort(404);
        }
        return view('editLink', compact('customizedLink'));
    }
    
    public function updateLink(Request $request, $id) {
        $customizedLink = CustomizedLink::find($id);
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
}
