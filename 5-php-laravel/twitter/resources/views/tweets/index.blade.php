    {{-- @if ($notify_tweet_published)
    <div class="alert alert-success" role="alert">
        Tweet publicado con éxito
    </div>
    @endif

    @if ($notify_tweet_updated)
    <div class="alert alert-success" role="alert">
        Tweet actualizado con éxito
    </div>
    @endif

    @if ($notify_tweet_deleted)
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

        @auth
            <x-tweets.create>
                <x-slot name="method">POST</x-slot>
                <x-slot name="action">{{ route('tweets.store') }}</x-slot>
                <x-slot name="label">¿En qué andas?</x-slot>
                <x-slot name="button">Publicar</x-slot>
            </x-tweets.create>
        @endauth

        @guest
            <x-tweets.profile-subtitle>
                <div class="bg-gray-300 p-2 rounded-lg shadow-md flex items-center justify-center text-xl">
                    <p class="text-black p-4">
                        Debes <a href="{{ route('login') }}" class="text-indigo-500">iniciar sesión</a> para publicar tweets.
                    </p>
                </div>
            </x-tweets.profile-subtitle>
        @endguest


        @foreach ($tweets as $tweet)
            <x-tweets.tweet :tweet="$tweet"></x-tweets.tweet>
            <div class="pl-24">
                @foreach ($tweet->replies as $reply)
                    <x-tweets.reply :tweet="$reply"></x-tweets.reply>
                @endforeach
            </div>
        @endforeach


    </x-app-layout>
