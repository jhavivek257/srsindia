<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Client;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class ClientController extends Controller
{
    /** index page student list */
    public function client()
    {
        $clientList = Client::all();
        return view('client.client', compact('clientList'));
    }

    /** student add page */
    public function clientAdd()
    {
        return view('client.add-client');
    }
    
    /** student save record */
    public function clientSave(Request $request)
    {
        $request->validate([
            'full_name'    => 'required|string',
            'upload'        => 'required|image',
            'homepage'     => 'required|string',
            'service'        => 'required|string',
            'industries'        => 'required|string',
        ]);
        
        DB::beginTransaction();
        try {
           
            $upload_file = rand() . '.' . $request->upload->extension();
            $request->upload->move(storage_path('app/public/clients/'), $upload_file);
            
            if(!empty($request->upload)) {
                $student = new Client;
                $student->full_name   = $request->full_name;
                $student->upload = $upload_file;
                $student->homepage    = $request->homepage;
                $student->service    = $request->service;
                $student->industries    = $request->industries;
                $student->save();

                Toastr::success('Has been add successfully :)','Success');
                DB::commit();
            }

            return redirect()->back();
           
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('fail, Add new Client  :)','Error');
            return redirect()->back();
        }
    }

    /** student delete */
    public function clientDelete(Request $request)
    {
        DB::beginTransaction();
        try {
           
            if (!empty($request->id)) {
                Client::destroy($request->id);
                unlink(storage_path('app/public/clients/'.$request->avatar));
                DB::commit();
                Toastr::success('Client deleted successfully :)','Success');
                return redirect()->back();
            }
    
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Client deleted fail :)','Error');
            return redirect()->back();
        }
    }

}