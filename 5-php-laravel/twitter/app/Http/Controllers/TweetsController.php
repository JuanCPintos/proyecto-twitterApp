<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetsController extends Controller
{
    //
    public function index() {
        $tweets = Tweet::orderBy('created_at', 'desc')->get();
        //Recuperar todos los tweets
        // echo "hola";

        // $tweets = Tweet::get();
        // // dd($tweets);

        // recupero los diferentes valores de session
        $notify_tweet_published = session('notify_tweet_published');
        $notify_tweet_updated = session('notify_tweet_updated');
        $notify_tweet_deleted = session('notify_tweet_deleted');
        
        // Busca la carpeta tweets y levanta la vista index
        return view('tweets/index',[
            'tweets' => $tweets,
            'notify_tweet_published' => $notify_tweet_published,
            'notify_tweet_updated' => $notify_tweet_updated,
            'notify_tweet_deleted' => $notify_tweet_deleted
        ]);
    }
    public function create() {
        return view('tweets.create', [
            'tweet'=>'',
            'name'=>''
        ]);
    }

    public function edit(Tweet $tweet) {
        return view('tweets.edit', [
            'tweet'=>$tweet
        ]);
    }

    public function update(Request $request, Tweet $tweet) {
        $validated = $request->validate([
            'tweet' => ['required', 'max:255', 'min:4'],
            // 'name' => ['required', 'max:255', 'min:4']
        ]);

        $tweet->message = $validated['tweet'];
        // $tweet->name = $validated['name'];
        $tweet->save();

        session()->flash('notify_tweet_updated', true );

        return redirect()->route('tweets');
    }

    public function store(Request $request)
    {
        
        // $request -> validate([
        //     'tweet' => ['required', 'max:255', 'min:4']
        // ]);

        // $this -> validate($request, [
        //     'tweet' => ['required', 'max:255', 'min:4']
        // ]);

        $validated = $request->validate([
            'tweet' => ['required', 'max:255', 'min:4'],
            'name' => ['required', 'max:255', 'min:4']
        ]);

        // $tweet = $request->input('tweet');
        // dd($tweet);
        $new_tweet = new Tweet;
        $new_tweet->message = $validated['tweet'];
        $new_tweet->name = $validated['name'];
        $new_tweet->save();

        session()->flash('notify_tweet_published', true );

        return redirect()->route('tweets');
    }

    public function delete(Tweet $tweet) {
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
