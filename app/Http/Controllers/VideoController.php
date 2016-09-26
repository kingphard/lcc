<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

//use App\Http\Requests;

use App\Video;

use Session;
use Redirect;

class VideoController extends Controller
{
     public function index()
    {       
       return view('video_upload');
    }

    public function store(Request $request)
    {   
        $video =  new Video();
        $title = $request->input('name');
        $details = $request->input("details");
        $preacher = $request->input("preacher");
        $link = $request->input("link");
        

        if($request->hasFile('vid_file'))
        {

            $file = $request->file('vid_file');
            $original_extension = $file->getClientOriginalExtension();
            $new_name = time().'.'.$original_extension;
            $file ->move('..uploads/videos/', $new_name);
            $video->vid_file =  $new_name;

        }
        else
        {
            Session::flash('error', 'uploaded file is not valid');
            return Redirect::to('home');
        }

        
        $video->title =  $title;
        $video->details =  $details;
        $video->preacher = $preacher;
        $video->link =  $link;
        $video->save();
       
    return redirect('video')->with('status', 'data uploaded');
    }
    public function readAll()
    {
        $readVideo = Video::all();
        if($readVideo){
        //return response()->json(["status"=>"Success","message"=>$readSpecialMsg]);
        return view('sermons')-> with('readVideo', $readVideo);
        }
        else
        {
            return "file not seen"; 
        }
    }
    public function readOne($id)
    {
        $readOneVideo = Video::find($id);

        if ($readOneVideo)
        {
            return response()->json(["status"=>"Success", "title"=>$readOneVideo->title, "link"=>$readOneVideo->link]);
        }
        else
        {
            return response()->json(["status"=>"Error:Unable to find video"]);
        }
    }

}
