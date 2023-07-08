<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailContact;

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

        Mail::to('yawole4346@lukaat.com')->send(new EmailContact($mailData));

        //@todo notification

    }
}
