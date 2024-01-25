<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Tweet;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function user($nickname) {
        $user = User::where('nickname', $nickname)->firstOrFail();
        $tweets = Tweet::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
        $replies = Reply::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
        return view('users.profile',[
            'user' => $user,
            'tweets' => $tweets,
            'replies' => $replies            
        ]);
    }
}