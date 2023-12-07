<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Tweet') }}
        </h2>
    </x-slot>

    <x-tweets.create>
        <x-slot name="method">PUT</x-slot>
        <x-slot name="action">{{ route('tweets.update', ['tweet'=> $tweet->id]) }}</x-slot>
        <x-slot name="label">Editar Tweet</x-slot>
        <x-slot name="message">{{ $tweet->message }}</x-slot>
        <x-slot name="button">Editar</x-slot>
    </x-tweets.create>



</x-app-layout>