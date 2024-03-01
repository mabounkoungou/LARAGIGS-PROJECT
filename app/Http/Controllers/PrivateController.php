<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivateController extends Controller
{
    public function private(){
        return view ('front.private');
    }
}
