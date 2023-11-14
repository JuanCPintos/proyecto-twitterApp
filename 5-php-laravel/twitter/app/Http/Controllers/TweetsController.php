<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetsController extends Controller
{
    //
    public function index() {
        $tweet = Tweet::orderBy('created_at', 'desc')->get();
        //Recuperar todos los tweets
        // echo "hola";

        // $tweets = Tweet::get();
        // // dd($tweets);
        
        // Busca la carpeta tweets y levanta la vista index
        return view('tweets.index',[
            'tweets' => $tweets
        ]);
    }
    public function create() {
        return view('tweets.create');
    }

    public function store(Request $request)
    {
        $tweet = $request->input('tweet');

        $new_tweet = new Tweet;
        $new_tweet->message = $tweet;
        $new_tweet->save();

        return redirect()->route('/tweets');
    }
}
