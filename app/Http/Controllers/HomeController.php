<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
        $media_cat = category::all();
        
       return view('home')->with('media_cat', $media_cat);
    }

    public function store(Request $request)
    {   
        $image =  new Image();
        $title = $request->input('name');
        $description = $request->input("description");
        $categories_id = $request->input("categories_id");


        if($request->hasFile('image'))
        {

            $file = $request->file('image');
            $original_extension = $file->getClientOriginalExtension();
            $new_name = time().'.'.$original_extension;
            $file ->move('..uploads/', $new_name);
            $image->file =  $new_name;

        }
        else
        {
            Session::flash('error', 'uploaded file is not valid');
            return Redirect::to('home');
        }

        
        $image->title =  $title;
        $image->description =  $description;
        $image->categories_id =  $categories_id;
        $image->save();
       
    return redirect('home')->with('status', 'image uploaded');
    }

    

}
