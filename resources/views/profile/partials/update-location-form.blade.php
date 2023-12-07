{{-- <section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Locate Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's locate information.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form id="formLocation" method="post" action="{{ route('profile.location') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="locality" :value="__('Locality')" />
            <x-text-input id="locality" name="locality" type="text" class="mt-1 block w-full" :value="old('locality', $user->locality)" required autocomplete="locality" />
            <x-input-error class="mt-2" :messages="$errors->get('locality')" />
        </div>

        <div>
            <x-input-label for="province" :value="__('Province')" />
            <x-text-input id="province" name="province" type="text" class="mt-1 block w-full" :value="old('province', $user->province)" required autocomplete="province" />
            <x-input-error class="mt-2" :messages="$errors->get('province')" />
        </div>

        <div>
            <x-input-label for="country" :value="__('Country')" />
            <x-text-input id="country" name="country" type="text" class="mt-1 block w-full" :value="old('country', $user->country)" required autocomplete="country" />
            <x-input-error class="mt-2" :messages="$errors->get('country')" />
        </div>


        <div class="flex items-center gap-4">
            <x-primary-button :form="__('formLocation')">{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'location-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section> --}}
