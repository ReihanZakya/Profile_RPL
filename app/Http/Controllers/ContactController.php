<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view ('fitur.contact');
    }

    public function kirim_pesan(Request $request){
        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message,
        );
        Mail::send('emails.contact', $data , function($message) use ($data){
            $message->from($data['email']);
            $message->to('rezakya41@gmail.com');
            $message->subject($data['subject']);
        });

        return redirect('contact');
    }

    function contoh(){
        return "aaa";
    }
}
