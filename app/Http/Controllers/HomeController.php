<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();

class HomeController extends Controller
{
    public function index(){
    	$all_published_product=DB::table('tbl_products')
                        ->join('tbl_category', 'tbl_products.category_id', '=', 'tbl_category.category_id')
                        ->join('tbl_manufactur', 'tbl_products.manufactur_id', '=', 'tbl_manufactur.manufactur_id')
                        ->select('tbl_products.*', 'tbl_category.category_name', 'tbl_manufactur.manufactur_name')
                        ->where('tbl_products.publication_status',1)
                        ->limit(8)
                        ->get()
                        ->random(8);
        $published_product=view('pages.home_content')->with('all_published_product', $all_published_product);
        return view('layout')->with('pages.home_content', $published_product);
    
    }

    public function show_categoey($category_id){
       
       $product_category=DB::table('tbl_products')
                        ->join('tbl_category', 'tbl_products.category_id', '=', 'tbl_category.category_id')
                        ->select('tbl_products.*', 'tbl_category.category_name')
                        ->where('tbl_category.category_id',$category_id)
                        ->where('tbl_products.publication_status',1)
                        ->limit(8)
                        ->get();
        $published_category=view('pages.category_show')->with('product_category', $product_category);
        return view('layout')->with('pages.category_show', $published_category);
    }

    public function product_details_by_id($product_id){
        $product_by_details=DB::table('tbl_products')
                        ->join('tbl_category', 'tbl_products.category_id', '=', 'tbl_category.category_id')
                        ->join('tbl_manufactur', 'tbl_products.manufactur_id', '=', 'tbl_manufactur.manufactur_id')
                        ->select('tbl_products.*', 'tbl_category.category_name', 'tbl_manufactur.manufactur_name')
                        ->where('tbl_products.product_id', $product_id)
                        ->where('tbl_products.publication_status',1)
                        ->first();

        $manage_product_by_details=view('pages.product_details')->with('product_by_details', $product_by_details);
        return view('layout')->with('pages.product_details', $manage_product_by_details);
    }
}
