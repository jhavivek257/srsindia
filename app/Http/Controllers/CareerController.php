<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Career;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careerList = Career::all();
        return view('career.career', compact('careerList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('career.add-career');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'job_position'    => 'required|string',
            'experience'        => 'required|string',
            'job_type'     => 'required|string',
            'location'        => 'required|string',
            'qualification'        => 'required|string',
            'skills'        => 'required|string',
            'working_days'        => 'required|string',
            'editordata'        => 'required|string',
        ]);
        
        DB::beginTransaction();
        try {
           
                 $career = new Career;
                $career->job_position       = $request->job_position;
                $career->experience         = $request->experience;
                $career->job_type           = $request->job_type;
                $career->location           = $request->location;
                $career->qualification      = $request->qualification;
                $career->skills             = $request->skills;
                $career->working_days       = $request->working_days;
                $career->content            = $request->editordata;
                $career->save();

                Toastr::success('Has been add successfully :)','Success');
                DB::commit();
                return redirect()->back();
           
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('fail, Add new Client  :)','Error');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        DB::beginTransaction();
        try {
           
            if (!empty($request->id)) {
                Career::destroy($request->id);
                DB::commit();
                Toastr::success('Career deleted successfully :)','Success');
                return redirect()->back();
            }
    
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Client deleted fail :)','Error');
            return redirect()->back();
        }
    }


}
