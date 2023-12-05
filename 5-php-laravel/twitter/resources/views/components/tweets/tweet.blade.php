<div class="sm:px-0 lg:px-64 py-4 ">
    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
            <div class="p-6 text-gray-900 block">
                <div class="flex gap-x-3 mb-1">
                    <div class="rounded-full h-12 w-12 overflow-hidden">
                        <a href="{{ route('users.profile', ['nickname'=> $tweet->user->nickname]) }}">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/7/7a/SpongeBob_SquarePants_character.png"
                                alt="">
                        </a>
                    </div>
                    <a class="my-auto" href="{{ route('users.profile', ['nickname'=> $tweet->user->nickname]) }}">
                        <strong class="my-auto">{{ $tweet->user->name }}</strong>
                    </a>
                    <p class="my-auto">{{ $tweet->created_at }}</p>
                </div>
                <div class="block">
                    <div class="block ps-14 pb-4">
                        <p class="">{{ $tweet->message }}</p>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex basis-1/2 pl-14">
                            <a type="button"
                                class="flex w-28 justify-center rounded-full bg-transparent border-2 border-neutral-200 px-3 py-1.5 text-sm font-semibold leading-6 text-fuchsia-600 shadow-sm hover:border-fuchsia-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                                href="{{ route('reply.create', ['tweet' => $tweet->id]) }}">
                                Contestar</a>
                        </div>
                        <div class="flex basis-1/2 justify-end gap-4">
                            @if (auth()->check())
                                @if ($tweet->user_id == auth()->user()->id)
                                    <a type="button"
                                        class="flex w-20 justify-center rounded-full bg-transparent border-2 border-neutral-200 px-3 py-1.5 text-sm font-semibold leading-6 text-fuchsia-600 shadow-sm hover:border-fuchsia-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                                        href="{{ route('tweets.edit', ['tweet' => $tweet->id]) }}"
                                        class="btn btn-primary">Editar</a>
                                    <a type="button"
                                        class="flex w-20 justify-center rounded-full bg-transparent border-2 border-neutral-200 px-3 py-1.5 text-sm font-semibold leading-6 text-fuchsia-600 shadow-sm hover:border-fuchsia-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                                        href="{{ route('tweets.delete', ['tweet' => $tweet->id]) }}"
                                        class="btn btn-primary">Eliminar</a>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
