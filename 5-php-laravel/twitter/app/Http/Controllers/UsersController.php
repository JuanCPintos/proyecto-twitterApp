<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function user($nickname) {
        // $tweets = Tweet::orderBy('created_at', 'desc')->get();
        //Recuperar todos los tweets
        // echo "hola";
        $user = User::where('nickname', $nickname)->firstOrFail();


        $tweets = Tweet::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();

        // $tweets = Tweet::get();
        // // dd($tweets);
        
        // Busca la carpeta tweets y levanta la vista index
        return view('users.profile',[
            'user' => $user,
            'tweets' => $tweets
            
        ]);
    }
}