<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Perfil de {{ $user->name }}
        </h2>
    </x-slot>

    <x-tweets.profile-subtitle>
            Últimas 10 publicaciones de {{'@'.$user->nickname}}
    </x-tweets.profile-subtitle>

    @foreach ($tweets as $tweet)
        <x-tweets.tweet :tweet="$tweet"></x-tweets.tweet>
        <div class="pl-24">
            @foreach ($tweet->replies as $reply)
                <x-tweets.reply :tweet="$reply"></x-tweets.reply>
            @endforeach
        </div>
    @endforeach

    <x-tweets.profile-subtitle>
            Últimos 10 comentarios de {{'@'.$user->nickname}}
    </x-tweets.profile-subtitle>

    @foreach ($replies as $reply)
        <x-tweets.reply :tweet="$reply"></x-tweets.reply>
    @endforeach

</x-app-layout>
