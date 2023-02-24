<?php

namespace App\Http\Controllers;

use App\Mail\CONTACTFORM as CONTACTFORMAlias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Controller
{
   public function index(){
       $data['name'] = $_GET['name'];
       $data['email'] = $_GET['email'];

       $data['subject'] = $_GET['subject'];
       $data['message'] = $_GET['message'];
//        Mail::send('email.contactUs', ['data' => $data], function($message) use($data){
//        $message->to("miraboy13@gmail.com")->subject($data['message']);
//        });
        Mail::to('miraboy13@gmail.com')->send(new CONTACTFORMAlias($data));
//       return $data;
       return view('email.contactUs', ['data' => $data]);
    }
}
