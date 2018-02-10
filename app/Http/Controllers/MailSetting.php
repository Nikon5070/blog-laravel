<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class MailSetting extends Controller
{

    public function index()
    {
        return view('emails.formSendMail');
    }

    public function send()
    {

//        Mail::send('emails.contact-mail', [], function ($message) {
//            $message->from('test.finansist@gmail.com', 'Your Application');
//
//            $message->to('nikon5070@gmail.com')->subject('Your Reminder!');
//        });
    }
}
