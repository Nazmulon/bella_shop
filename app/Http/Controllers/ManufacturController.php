<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();

class ManufacturController extends Controller
{
    public function index(){
        $this->AdminAuthCheck();

    	return view('admin.add_manufactur');
    }

    public function save_manufactur(Request $request){

    	$data =array();
    	$data['manufactur_id']= $request->manufactur_id;
    	$data['manufactur_name']= $request->manufactur_name;
    	$data['manufactur_description']= $request->manufactur_description;
    	$data['publication_status']= $request->publication_status;

    	DB::table('tbl_manufactur')->insert($data);
    	Session::put('messege', 'manufactur insert successfully');
		return redirect('/add_manufactur');
    }

    public function all_manufactur(){
        $this->AdminAuthCheck();

    	$all_manufactur_info=DB::table('tbl_manufactur')->get();
    	 // $manage_manufactur=view('admin.all_manufactur')->with('all_manufactur_info', $all_manufactur_info);
    	return view('admin.all_manufactur')->with('all_manufactur_info', $all_manufactur_info);
    }

    public function unactive_manufactur($manufactur_id){
        DB::table('tbl_manufactur')->where('manufactur_id', $manufactur_id)->update(['publication_status' => 0]);
        return redirect('/all_manufactur');
    }

    public function active_manufactur($manufactur_id){
        DB::table('tbl_manufactur')->where('manufactur_id', $manufactur_id)->update(['publication_status' => 1]);
        return redirect('/all_manufactur');
    }

    public function edit_manufactur($manufactur_id){
        $this->AdminAuthCheck();

        $manufactur_info=DB::table('tbl_manufactur')
                    ->where('manufactur_id', $manufactur_id)
                    ->first();
        
         return view('admin.edit_manufactur')->with('manufactur_info', $manufactur_info);
    }

    public function update_manufactur(Request $request, $manufactur_id){
       $data = array();
       $data['manufactur_name']= $request->manufactur_name;
       $data['manufactur_description']= $request->manufactur_description;
        DB::table('tbl_manufactur')
                    ->where('manufactur_id', $manufactur_id)
                    ->update($data);
        Session::get('messege', 'Manufacture insert successfully');

         return redirect('/all_manufactur');

    }

    public function delete_manufactur($manufactur_id){
        DB::table('tbl_manufactur')
            ->where('manufactur_id', $manufactur_id)
            ->delete();
        Session::get('messege', 'Manufacture insert successfully');
        return redirect('/all_manufactur');

    }

    public function AdminAuthCheck(){
        $admin_id=Session::get('admin_id');
        if ($admin_id) {
            return;
        }else{
            return redirect('/admin')->send();
        }
    }
}
