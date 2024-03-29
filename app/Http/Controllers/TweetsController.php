<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetsController extends Controller
{
    public function index() {
        $tweets = Tweet::orderBy('created_at', 'desc')->get();
        $notify_tweet_published = session('notify_tweet_published');
        $notify_tweet_updated = session('notify_tweet_updated');
        $notify_tweet_deleted = session('notify_tweet_deleted');
        return view('tweets/index',[
            'tweets' => $tweets,
            'notify_tweet_published' => $notify_tweet_published,
            'notify_tweet_updated' => $notify_tweet_updated,
            'notify_tweet_deleted' => $notify_tweet_deleted
        ]);
    }
    public function edit(Tweet $tweet) {
        return view('tweets.edit', [
            'tweet'=>$tweet
        ]);
    }
    public function update(Tweet $tweet, Request $request) {
        $validated = $request->validate([
            'tweet' => ['required', 'max:255', 'min:4']
        ]);
        $tweet->message = $validated['tweet'];
        $tweet->save();
        session()->flash('notify_tweet_updated', true );
        return redirect()->route('tweets');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tweet' => ['required', 'max:255', 'min:4']
        ]);
        $new_tweet = new Tweet;
        $new_tweet->message = $validated['tweet'];
        $new_tweet->user_id = auth()->user()->id;
        $new_tweet->save();
        session()->flash('notify_tweet_published', true );
        return redirect()->route('tweets');
    }
    public function delete(Tweet $tweet) {
        if($tweet->user_id != auth()->user()->id) {
            abort(403);
        }
        return view('tweets.delete', [
            'tweet'=>$tweet
        ]);
    }
    public function destroy(Tweet $tweet) {
        $tweet->delete();
        session()->flash('notify_tweet_deleted', true );
        return redirect()->route('tweets');
    }
}
