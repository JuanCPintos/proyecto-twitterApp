{{-- <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">{{ $tweet->name }}</h5>
                <p class="card-text">{{ $tweet->message }}</p>
                
                <div>
                    <a href="{{route('tweets.edit',['tweet'=>$tweet->id])}}"
                        class="btn btn-primary">Contestar</a>
                    <div>
                        @if (auth()->check())
                            @if ($tweet->user_id == auth()->user()->id)
                                <a href="{{ route('tweets.edit', ['tweet' => $tweet->id]) }}" class="btn btn-primary">Editar</a>
                                <a href="{{ route('tweets.delete', ['tweet' => $tweet->id]) }}" class="btn btn-primary">Eliminar</a>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div> --}}

<div class="sm:px-0 lg:px-64 py-4 ">
    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
            <div class="p-6 text-gray-900 block">
                <div class="flex gap-x-3 mb-1">
                    <div class="rounded-full h-12 w-12 overflow-hidden">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/7/7a/SpongeBob_SquarePants_character.png"
                            alt="">
                    </div>
                    <h5 class="my-auto">{{ $tweet->user->name }}</h5>
                    <p class="my-auto">{{ $tweet->created_at }}</p>
                </div>
                <div class="block">
                    <div class="flex">
                    </div>
                    <p class="">{{ $tweet->message }}</p>
                    <a href="{{ route('tweets.edit', ['tweet' => $tweet->id]) }}" class="btn btn-primary">Contestar</a>
                    <div>
                        @if (auth()->check())
                            @if ($tweet->user_id == auth()->user()->id)
                                <a href="{{ route('tweets.edit', ['tweet' => $tweet->id]) }}"
                                    class="btn btn-primary">Editar</a>
                                <a href="{{ route('tweets.delete', ['tweet' => $tweet->id]) }}"
                                    class="btn btn-primary">Eliminar</a>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
