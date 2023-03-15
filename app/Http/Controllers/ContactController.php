<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        );

        Mail::to('info@jtsservice.com')->send(new ContactFormMail($data));

        return redirect()->route('contact')->with('success_message', 'Your message was sent successfully,! we will get back to you shortly.');
    }
}
