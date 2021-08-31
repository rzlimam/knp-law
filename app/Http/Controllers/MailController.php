<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function index()
    {
        return view('contact-us');
    }
    public function mail(Request $request)
    {
        $mail = new EMail();
        $mail->contact_name = $request->contact_name;
        $mail->contact_email = $request->contact_email;
        $mail->contact_phone = $request->contact_phone;
        $mail->contact_subject = $request->contact_subject;
        $mail->contact_message = $request->contact_message;

        Mail::to('farraz.fauzan@gmail.com')->send(new \App\Mail\MyMail($mail));
        return redirect('contact-us')->with('status', 'Email has been send. Thank you for contacting us!');
    }
}
