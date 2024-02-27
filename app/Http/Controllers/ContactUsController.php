<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function ContactUs(){
        return view('front.contactus.contactus');
    }
}
