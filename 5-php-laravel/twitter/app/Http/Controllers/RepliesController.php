<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

use App\Models\Reply;

class RepliesController extends Controller
{
    public function create(Request $request, Tweet $tweet) {

        
        return view('replies.create', [
            'tweet'=>$tweet
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'reply' => ['required', 'max:255', 'min:4'],
            // 'name' => ['required', 'max:255', 'min:4']
        ]);

        $reply = new Reply();
        $reply->message = $validated['reply'];
        $reply->tweet_id = $request->tweet_id;
        $reply->user_id = auth()->user()->id;
        $reply->save();

        return redirect()->route('tweets');
    }
}