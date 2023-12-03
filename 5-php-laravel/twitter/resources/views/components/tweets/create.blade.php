@props(['p', 'method', 'action', 'label', 'button', 'message'])

<x-textarea>
    <form action={{ $action }} method= {{ $method }}>
        @csrf
        @method($method)

        <div>
            <label class="block">{{ $label }}</label>
        
            <p class="py-4 italic text-slate-500">{{ $p ?? ''}}</p>
            
            <textarea name="tweet" id="" cols="30" rows="1" class="w-full border-2 border-gray-300 p-2 rounded-md @error('tweet') border-red-500 @enderror">{{  $message ?? ''  }}</textarea>
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

