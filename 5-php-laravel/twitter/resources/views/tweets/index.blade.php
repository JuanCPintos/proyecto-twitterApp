    {{-- @if( $notify_tweet_published )
    <div class="alert alert-success" role="alert">
        Tweet publicado con éxito
    </div>
    @endif

    @if( $notify_tweet_updated )
    <div class="alert alert-success" role="alert">
        Tweet actualizado con éxito
    </div>
    @endif

    @if( $notify_tweet_deleted )
    <div class="alert alert-danger" role="alert">
        Tweet eliminado con éxito
    </div>
    @endif --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tweets') }}
        </h2>
    </x-slot>

    <x-tweets.create></x-tweets.create>

    @foreach ($tweets as $tweet)
        <x-tweets.tweet :tweet="$tweet"></x-tweets.tweet>
    @endforeach


</x-app-layout>