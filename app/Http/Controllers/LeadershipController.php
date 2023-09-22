<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadershipController extends Controller
{
    public function index(){
        return view('frontend.leadership');
    }
}
