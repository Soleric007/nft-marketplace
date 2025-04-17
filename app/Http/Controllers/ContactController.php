<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|max:5000',
        ]);

        Mail::to('astauchiha234@gmail.com') // ✅ Replace with your admin email
            ->send(new ContactMessage($validated));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}

