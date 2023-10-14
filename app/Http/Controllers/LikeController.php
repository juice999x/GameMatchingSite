<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Timeline;
use App\Models\Like;
use App\Models\User;

class LikeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store($timelineId)
    {
        Auth::user()->like($timelineId);
        return 'ok!';
    }

    public function destroy($timelineId)
    {
        Auth::user()->unlike($timelineId);
        return 'ok!';
    }
}
