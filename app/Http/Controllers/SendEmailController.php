<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Mail\MailSend;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function index()
    {
        return view('emails.form');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:20',
            'email_address' => 'required|email',
            'message' => 'required|string',
        ]);
    
        $details = [
            'name' => $request->name,
            'mobile_number' => $request->mobile_number,
            'email_address' => $request->email_address,
            'message' => $request->message,
        ];
    
        Mail::to('sales@inovasimasadepan.com')->send(new MailSend($details));
    
        return response()->json(['success' => 'Email sent successfully'], 200);
    }

}
