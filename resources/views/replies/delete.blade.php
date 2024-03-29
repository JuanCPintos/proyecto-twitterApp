<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tweet') }}
        </h2>
    </x-slot>

    <x-tweets.create>
        <x-slot name="method">DELETE</x-slot>
        <x-slot name="action">{{ route('reply.destroy', ['reply'=> $reply->id]) }}</x-slot>
        <x-slot name="label">Vas a eliminar tu respuesta a: </x-slot>
        <x-slot name="message">{{ $reply->message }}</x-slot>
        <x-slot name="button">Eliminar</x-slot>
    </x-tweets.create>

    

</x-app-layout>