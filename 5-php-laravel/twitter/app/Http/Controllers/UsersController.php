<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Tweet;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function user($nickname) {
        //Recuperar todos los tweets
        $user = User::where('nickname', $nickname)->firstOrFail();
        
        $tweets = Tweet::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        $replies = Reply::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
        
        // Busca la carpeta tweets y levanta la vista index
        return view('users.profile',[
            'user' => $user,
            'tweets' => $tweets,
            'replies' => $replies            
        ]);
    }
}