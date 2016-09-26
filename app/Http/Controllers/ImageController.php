<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Image;

//use App\DB;

class ImageController extends Controller
{
    public function index()
    {

    $img_cat = \DB::table('images')->orderBy('id', 'desc')->get();
     	return view('index')->with('img_cat', $img_cat);
    }
    public function index1(){

    	$img_cate = image::all();
     	return view('books')->with('img_cate', $img_cate);
    }
    public function indexgen()
    {

    $img_cat = image::all();
     	return view('/about_gen')->with('img_cat', $img_cat);
    }
}
