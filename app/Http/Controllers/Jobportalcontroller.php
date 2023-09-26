<?php

namespace App\Http\Controllers;
use App\Models\Career;
use Illuminate\Http\Request;

class Jobportalcontroller extends Controller
{
    public function index() {

        $careerList = Career::all();
        $data['careerList'] = $careerList;
        return view('frontend.jobs', $data);
    }

    public function jobsdetails($id) {
        $CareerDetails = Career::where('id',$id)->first();
        $data['CareerDetails'] = $CareerDetails;
        return view('frontend.jobsdetails', $data);

    }
}
