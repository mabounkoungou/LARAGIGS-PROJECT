<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function privacyPolicy(){
        return view('front.privacypolicy');
    }
}
