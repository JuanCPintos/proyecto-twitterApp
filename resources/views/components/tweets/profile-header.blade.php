<div class="sm:px-0 lg:px-64 py-4 ">
    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="flex gap-6">
            <div class="w-32 h-32 rounded-full overflow-hidden">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/7a/SpongeBob_SquarePants_character.png" alt="">
            </div>
            <div>
                <h2 class="text-3xl"><strong>Perfil de {{$user->name}}</strong></h2>
                <p class="text-2xl font-medium">{{'@' . $user->nickname}}</p>
                <p class="pt-3 py-0.5 font-medium">{{$user->locality . ' - ' . $user->province . ' - ' . $user->country}}</p>
                <p class="font-medium">{{$user->phone}}</p>
            </div>
        </div>
    </div>
</div>