<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Image;

class ImageController extends Controller
{
    public function index()
    {

    $img_cat = image::all();
     	return view('index')->with('img_cat', $img_cat);
    }
    public function index1(){

    	$img_cate = image::all();
     	return view('events')->with('img_cate', $img_cate);
    }
}
