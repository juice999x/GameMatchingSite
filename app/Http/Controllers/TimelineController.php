<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Timeline;

class TimelineController extends Controller
{
    public function index(Timeline $timeline)
    {
        //dd($timeline->get());
        return view('posts.timeline')->with(['timelines' => $timeline->get()]);
    }
    
    public function timeline()
    {
        return view('posts.timeline');
    }
    
    public function like()
    {
        return view('posts.like');
    }
    
    public function timeline2(Timeline $timeline)
    {
        return view('posts.timeline2')->with(['timelines' => $timeline->get()]);
    }
}
