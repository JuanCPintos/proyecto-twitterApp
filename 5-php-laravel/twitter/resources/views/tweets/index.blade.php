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

    <x-tweets.create>
        <x-slot name="method">POST</x-slot>
        <x-slot name="action">{{ route('tweets.store') }}</x-slot>
        <x-slot name="label">¿En qué andas?</x-slot>
        <x-slot name="button">Publicar</x-slot>
    </x-tweets.create>

    {{-- <x-text-area>
        <form action="{{ route('tweets.store') }}" method="POST">

        </form>
    </x-text-area> --}}


    @foreach ($tweets as $tweet)
        <x-tweets.tweet :tweet="$tweet"></x-tweets.tweet>
        <div class="pr-4">
            @foreach ($tweet->replies as $reply)
                <x-tweets.tweet :tweet="$reply"></x-tweets.tweet>
            @endforeach
        </div>
    @endforeach


</x-app-layout>