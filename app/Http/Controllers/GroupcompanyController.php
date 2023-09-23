<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupcompanyController extends Controller
{
    public function index() {
        return view('frontend.group-company');
    }
}
