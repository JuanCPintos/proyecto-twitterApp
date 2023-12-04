{{-- 
        <h1>Elimina tu tweet #{{$tweet->id}}</h1>
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach( $errors->all() as $error )
                <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('tweets.destroy', ['tweet'=> $tweet->id]) }}" method="POST">
            @csrf
            @method('delete')
            <input type="hidden" name="tweet_id" value="{{$tweet->id}}">
            
            <div>
                <label>Tweet: {{ $tweet->message }}</label>
                @error('tweet')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <hr>
            <button type="submit">Eliminar</button>
        </form>
        <p>
            <a href="{{ route('tweets') }}">
                Volver
            </a>
        </p> --}}

        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Eliminar Tweet') }}
                </h2>
            </x-slot>
        
            <x-tweets.create>
                <x-slot name="method">DELETE</x-slot>
                <x-slot name="action">{{ route('tweets.destroy', ['tweet'=> $tweet->id]) }}</x-slot>
                <x-slot name="label">Vas a eliminar tu tweet</x-slot>
                <x-slot name="message">{{ $tweet->message }}</x-slot>
                <x-slot name="button">Eliminar</x-slot>
            </x-tweets.create>
        
        
        
        </x-app-layout>