<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CsrController extends Controller
{
    public function index(){
        return view('frontend.csr');
    }
}
