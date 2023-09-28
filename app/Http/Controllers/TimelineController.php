<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Timeline;
use App\Models\Profile;
use App\Models\Like;
use App\Models\User;
use Cloudinary;

class TimelineController extends Controller
{
    
    public function fakehome(Timeline $timeline, User $user)
    {
        return view('matching.fakehome')->with(['timelines'=>$timeline->get(),  'user' => $user]);
    }
    
    public function index(Timeline $timeline, User $user)
    {
        $id = Auth::id();
        $a = User::where('id', '=', $id)->first();
        //dd($a);
        return view('matching.timeline')->with(['timelines'=>$timeline->get(), 'user' => $a]);
    }
    
    public function message(User $user)
    {
        $id = Auth::id();
        $a = User::where('id', '=', $id)->first();
        return view('matching.message')->with(['user' => $a]);
    }
    
    public function send(Request $request, Matching $matching)
    {
        $input_matching = $request['matching'];
        $matching->fill($input_matching)->save();
        return redirect('/matching' . $matching->id .'/message');
    }
    
    public function post(User $user)
    {
        $id = Auth::id();
        $a = User::where('id', '=', $id)->first();
        return view('matching.post')->with(['user' => $a]);
    }
    
    public function store(Request $request, Timeline $timeline)
    {
        $input = $request['timeline'];
        $timeline->fill($input)->save();
        return redirect('/matching/posts');
    }
    
    public function like(User $user)
    {
        $id = Auth::id();
        $a = User::where('id', '=', $id)->first();
        return view('matching.like')->with(['user' => $a]);
    }
    
    public function profile(User $user)
    {
        //dd($user->first());
        $id = Auth::id();
        $a = User::where('id', '=', $id);
        //dd($a);
        return view('matching.userprofile')->with(['user' => $user]);
    }
    
    public function edit(User $user)
    {
        //dd($user);
        $id = Auth::id();
        $a = User::where('id', '=', $id)->first();
        return view('matching.profileedit')->with(['user' => $a]);
    }
    
    public function update(Request $request, User $user)
    {
        //dd($user);
        $input_user = $request['user'];
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input_user += ['image_url' => $image_url];
        //dd($input_timeline);
        $user->fill($input_user)->save();
        return redirect('/matching/' . $user->id .'/edit');
    }
    
    public function privacy(User $user)
    {
        //dd($user);
        $id = Auth::id();
        $a = User::where('id', '=', $id)->first();
        return view('matching.privacy')->with(['user' => $a]);
    }
    
    public function logout()
    {
        return Auth::logout();
    }

}
