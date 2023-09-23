<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Jobportalcontroller extends Controller
{
    public function index() {
        return view('frontend.jobs');
    }

    public function jobsdetails() {
        return view('frontend.jobsdetails');
    }
}
