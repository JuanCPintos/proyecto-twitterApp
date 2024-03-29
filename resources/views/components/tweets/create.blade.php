<x-textarea>
    <form action={{ $action }} method= 'POST'>
        @csrf
        @method($method)

        <div>
            <label class="block">{{ $label }}</label>
            @if (isset($p))
                <p class="text-gray-500 pl-14 py-4 italic">{{ $p }}</p>
                
            @endif
            <textarea name="tweet" id="" cols="30" rows="1" class="w-full border-2 border-gray-300 p-2 rounded-md">{{  $message ?? ''  }}</textarea>
            @error('tweet')
                <div> {{ $message }} </div>
            @enderror
        </div>
        <div class="flex justify-end gap-4">
            <button type="reset" class="flex w-20 justify-center rounded-full bg-transparent border-2 border-neutral-200 px-3 py-1.5 text-sm font-semibold leading-6 text-fuchsia-600 shadow-sm hover:border-fuchsia-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Cancelar
            </button>
            
            <button type="submit" class="flex w-20 justify-center rounded-full bg-transparent border-2 border-neutral-200 px-3 py-1.5 text-sm font-semibold leading-6 text-fuchsia-600 shadow-sm hover:border-fuchsia-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                {{ $button }}
            </button>
        </div>
    </form>
</x-textarea>

