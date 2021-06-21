<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class WelcomeMailController extends Controller
{
    public function send() {
        $comment = 'Это сообщение отправлено из формы обратной связи';
        $toEmail = "nastya06051981@gmail.com";
        Mail::to($toEmail)->send(new WelcomeMail($comment));
        return 'Сообщение отправлено на адрес '. $toEmail;
    }
}
