<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Filament\Notifications\Notification;

use App\Mail\MailSend;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index() {
        
        // $banners = Banner::orderBy('created_at', 'asc')->limit(5)->get();
        $promoBanner = Banner::orderBy('created_at', 'asc')->limit(5)->pluck('promo_banner');
        $homeBanner = Banner::orderBy('created_at', 'asc')->limit(1)->pluck('home_banner');
        return view('index', compact( 'homeBanner', 'promoBanner'));
    }


    public function send(Request $request)
    {
        // Pastikan CAPTCHA ada dalam request
        $request->validate([
            'g-recaptcha-response' => 'required'
        ], [
            'g-recaptcha-response.required' => 'Please complete the CAPTCHA.'
        ]);

        // Kirim ke Google reCAPTCHA untuk validasi
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response'),
        ]);

        $captchaValidation = $response->json();

        if (!$captchaValidation['success']) {
            return back()->with('error', 'CAPTCHA verification failed!');
        }

        $details = [
            'name' => $request->name,
            'mobile_number' => $request->mobile_number,
            'email_address' => $request->email_address,
            'message' => $request->message,
        ];

        Mail::to('sales@inovasimasadepan.com')->send(new MailSend($details));

        // Pastikan response sesuai dengan yang diharapkan oleh JavaScript
        return response('OK', 200);
    }


}
