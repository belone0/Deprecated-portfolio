<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailContact;
use Illuminate\Support\Facades\Redirect;

class MailController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'string | required',
            'email' => 'string | required',
            'message' => 'string | required',
        ]);

        $mailData = [
            'name' => $data['name'],
            'email' => $data['email'],
            'message' => $data['message']
        ];

        Mail::to('portifoliobelone@gmail.com')->send(new EmailContact($mailData));

        return view('email.email-sent');
    }
}
