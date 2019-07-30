<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();

class ProductController extends Controller
{
    public function index(){
        $this->AdminAuthCheck();
        
    	return view('admin.add_product');
    }

    public function all_product(){
        $this->AdminAuthCheck();

        $all_product_info=DB::table('tbl_products')
                        ->join('tbl_category', 'tbl_products.category_id', '=', 'tbl_category.category_id')
                        ->join('tbl_manufactur', 'tbl_products.manufactur_id', '=', 'tbl_manufactur.manufactur_id')
                        ->select('tbl_products.*', 'tbl_category.category_name', 'tbl_manufactur.manufactur_name')
                        ->get();
        $manage_product=view('admin.all_product')->with('all_product_info', $all_product_info);
        return view('admin_layout')->with('admin.all_product', $manage_product);
    }
    public function save_product(Request $request){
    	$data= array();
    	$data['product_name']=$request->product_name;
    	$data['category_id']=$request->category_id;
    	$data['manufactur_id']=$request->manufactur_id;
    	$data['product_short_description']=$request->product_short_description;
    	$data['product_long_description']=$request->product_long_description;
    	$data['product_price']=$request->product_price;
    	$data['product_size']=$request->product_size;
    	$data['product_color']=$request->product_color;
    	$data['publication_status']=$request->publication_status;

    	$image=$request->file('product_image');
    	if ($image) {
    		$image_name=str_random(20);
    		$ext=strtolower($image->getClientOriginalExtension());
    		$image_full_name=$image_name.'.'.$ext;
    		$upload_path='image/';
    		$image_url=$upload_path.$image_full_name;
    		$success=$image->move($upload_path,$image_full_name);
    		if ($success) {
    			$data['product_image']=$image_url;

    			DB::table('tbl_products')->insert($data);
    			Session::put('messege', 'upload data successfully');
    			return redirect('/add_product');

    		}
    	}
    	$data['product_image']='';
    	DB::table('tbl_products')->insert($data);
    			Session::put('messege', 'upload data successfully without image');
    			return redirect('/add_product');
    }

    public function unactive_product($product_id){
        DB::table('tbl_products')->where('product_id', $product_id)->update(['publication_status' => 0]);
        return redirect('/all_product');
    }

    public function active_product($product_id){
        DB::table('tbl_products')->where('product_id', $product_id)->update(['publication_status' => 1]);
        return redirect('/all_product');
    }

    public function edit_product($product_id){
        $this->AdminAuthCheck();

        $category_info=DB::table('tbl_products')
                    ->where('product_id', $product_id)
                    ->first();
        
         return view('admin.edit_product')->with('product_info', $product_info);
    }

    public function update_product(Request $request, $product_id){
       $data = array();
       $data['category_name']= $request->category_name;
       $data['category_description']= $request->category_description;
        DB::table('tbl_products')
                    ->where('product_id', $product_id)
                    ->update($data);
        Session::get('messege', 'Category insert successfully');

         return redirect('/all_product');

    }

    public function delete_product($product_id){
        DB::table('tbl_products')
            ->where('product_id', $product_id)
            ->delete();
        Session::get('messege', 'Category insert successfully');
        return redirect('/all_product');

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
