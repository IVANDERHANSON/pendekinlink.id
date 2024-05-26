<?php

namespace App\Http\Controllers;

use App\Models\CustomizedLink;
use App\Http\Requests\StoreCustomizedLinkRequest;
use App\Http\Requests\UpdateCustomizedLinkRequest;
use Illuminate\Http\Request;

class CustomizedLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Link' => ['required'],
            'Source' => ['required']
        ]);

        CustomizedLink::create([
            'Link' => $request->Link,
            'Source' => $request->Source
        ]);

        $link = $request->Link;
        $message = "Link kamu telah berhasil dikustom: https://pendekinlink.id/$link";
        return redirect('/')->with('success', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomizedLink $customizedLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomizedLink $customizedLink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomizedLinkRequest $request, CustomizedLink $customizedLink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomizedLink $customizedLink)
    {
        //
    }
    
    public function redirect($link) {
        $Link = CustomizedLink::where('Link', $link);
        if ($Link->exists()) {
            return redirect($Link->first()->Source);
        }
        return abort(404);
    }
}
