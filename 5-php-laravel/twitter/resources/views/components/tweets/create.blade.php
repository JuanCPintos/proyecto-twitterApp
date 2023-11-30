{{-- <h1> ¿Que estas pensando?</h1>
<form action="{{ route('tweets.store') }}" method="POST">
    @csrf
    <div>
        <label>Tweet:</label>
        <input name="tweet" value="{{ old('tweet') }}">
        @error('tweet')
            <div>{{ $message }}</div>
        @enderror
    </div> --}}

{{-- <div>
        <label>Tu nombre:</label>
        <input name="name" value="{{ old('name') }}">
        @error('name')
        <div>{{ $message }}</div>
        @enderror
    </div> --}}
{{-- <hr>
<button type="submit">Tweet</button>
</form>
<p><a href=" {{ route('tweets') }}">volver</a></p> --}}



<div class="sm:px-0 lg:px-64 py-4 ">
    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
            <div class="p-6 text-gray-900 block">
                <form action="{{ route('tweets.store') }}" method="POST">
                    @csrf
                    <div>
                        <label class="block">¿En qué andas?</label>
                        {{-- <input name="tweet" value="{{ old('tweet') }}"> --}}
                        <textarea name="tweet" id="" cols="30" rows="1" class="w-full border-2 border-gray-300 p-2 rounded-md @error('tweet') border-red-500 @enderror">{{ old('tweet') }}</textarea>
                        @error('tweet')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex justify-end gap-4">
                        <button type="reset" class="flex w-20 justify-center rounded-full bg-transparent border-2 border-neutral-200 px-3 py-1.5 text-sm font-semibold leading-6 text-fuchsia-600 shadow-sm hover:border-fuchsia-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Cancelar
                        </button>
                        <button type="submit" class="flex w-20 justify-center rounded-full bg-transparent border-2 border-neutral-200 px-3 py-1.5 text-sm font-semibold leading-6 text-fuchsia-600 shadow-sm hover:border-fuchsia-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Publicar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
