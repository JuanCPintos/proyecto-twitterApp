<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

use App\Models\Reply;

class RepliesController extends Controller
{
    public function create( Tweet $tweet) {

        
        return view('replies.create', [
            'tweet'=>$tweet
        ]);
    }

    public function store(Request $request, Tweet $tweet)
    {
        $validated = $request->validate([
            'tweet' => ['required', 'max:255', 'min:4']
        ]);

        $reply = new Reply();

        $reply->message = $validated['tweet'];
        $tweet_id = $tweet->id;
        $reply->tweet_id = $tweet_id;
        $reply->user_id = auth()->user()->id;
        $reply->save();

        session()->flash('notify_reply_published', true );

        return redirect()->route('tweets');
    }

    public function edit(Reply $reply) {
        return view('replies.edit', [
            'reply'=>$reply
        ]);
    }

    public function update(Reply $reply, Request $request) {
        $validated = $request->validate([
            'reply' => ['required', 'max:255', 'min:4']
        ]);

        $reply->message = $validated['reply'];

        $reply->save();
    }

    public function delete(Reply $reply) {
        return view('replies.delete', [
            'reply'=>$reply
        ]);
    }

    public function destroy(Reply $reply) {
        $reply->delete();
        session()->flash('notify_reply_deleted', true );
        return redirect()->route('tweets');
    }

}