<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\addvideo;

class VideoController extends Controller
{
    public function submit(Request $request)
    {
        $this->validate($request , [
            'Videoname' => 'required',
            'VideoType' => 'required',
            'VideoURL' => 'required'
        ]);

        //Create new massage

        $Video = new addvideo;
        $Video->Videoname = $request->input('Videoname');
        $Video->VideoType = $request->input('VideoType');
        $Video->VideoURL = $request->input('VideoURL');

        //save message
        $Video->save();

        return redirect('/addvideos')->with('success' , 'Video Added');

    }

    public function __construct()
    {
        $this->middleware('auth:admin' || 'auth:owner');
    }

    public function getaddedVideos()
    {
        $addvideo = addvideo::all()->toArray();
        return view('addvideos' , compact('addvideo'));
    }

    public function getrecentVideos()
    {
        $recent = addvideo::all()->toArray();
        return view('home' , compact('recent'));
    }

    public function removeVideos()
    {
        $RVideo = addvideo::all();
        return view('removevideos')->with('removevideos' ,$RVideo );
    }

    public function Movies()
    {
        $Movies = addvideo::all();
        return view('Movies')->with('Movies' ,$Movies );
    }

    public function Series()
    {
        $Series = addvideo::all();
        return view('Series')->with('Series' ,$Series );
    }
}
