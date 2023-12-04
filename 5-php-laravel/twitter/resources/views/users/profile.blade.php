<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Perfil de {{ $user->name }}
        </h2>
    </x-slot>

    @foreach ($tweets as $tweet)
        <x-tweets.tweet :tweet="$tweet"></x-tweets.tweet>
        {{-- <div class="pr-4">
            @foreach ($tweet->replies as $reply)
                <x-tweets.tweet :tweet="$reply"></x-tweets.tweet>
            @endforeach
        </div> --}}
    @endforeach

</x-app-layout>
