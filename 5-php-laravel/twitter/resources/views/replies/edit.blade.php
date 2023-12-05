<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tweet') }}
        </h2>
    </x-slot>

    <x-tweets.create>
        <x-slot name="method">PUT</x-slot>
        <x-slot name="action">{{ route('reply.update', ['tweet'=> $tweet->id]) }}</x-slot>
        <x-slot name="label">Edita tu respuesta a: </x-slot>
        <x-slot name="p">{{ $tweet->message }}</x-slot>
        <x-slot name="button">Actualizar</x-slot>
    </x-tweets.create>

    

</x-app-layout>