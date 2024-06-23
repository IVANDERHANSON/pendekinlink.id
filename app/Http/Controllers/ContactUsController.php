<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Http\Requests\StoreContactUsRequest;
use App\Http\Requests\UpdateContactUsRequest;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'Email' => ['required', 'email'],
            'Message' => ['required']
        ]);

        ContactUs::create([
            'Email' => $request->Email,
            'Message' => $request->Message
        ]);

        return redirect()->back()->with('contactUs', 'Pesan kamu berhasil dikirim!');
    }
}
