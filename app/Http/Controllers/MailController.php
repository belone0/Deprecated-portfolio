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
            'email' => 'email | required',
            'message' => 'string | required',
        ]);

        $mailData = [
            'title' => 'PORTFOLIO MESSAGE! ',
            'body' => 'nome: ' . $data['name'] . ' email: ' . $data['email'] . ' message: ' . $data['message']
        ];

        Mail::to('haleniw977@iturchia.com')->send(new EmailContact($mailData));

        return view('home');
    }
}
