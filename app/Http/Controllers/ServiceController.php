<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        return view('frontend.distribution-network');
    }

    public function moderntrade() {
        return view('frontend.modern-trade');
    }

    public function onlinemarketing() {
        return view('frontend.online-marketing');
    }

    public function cfaoperation() {
        return view('frontend.cfa-operation');
    }

    public function businessConsultancy() {
        return view('frontend.business-consultancy');
    }

    public function brandDevelopment() {
        return view('frontend.brand-development');
    }
}
