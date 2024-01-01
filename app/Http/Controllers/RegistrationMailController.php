<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\RegistrationMail;

class RegistrationMailController extends Controller
{
    public function index()
    {
        $content = [
            'subject' => 'This is the mail dubject',
            'body' => 'This is the email body of how to send email from Laravel 10 with mailtrap.'
        ];

        Mail::to('genesis.bergonia.lista@gmail.com')->send(new RegistrationMail($content));

        return "Email has been sent.";
    }
}
