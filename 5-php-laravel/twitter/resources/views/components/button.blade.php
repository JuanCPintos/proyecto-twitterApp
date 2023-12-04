{{-- @props(['active']) --}}

{{-- @php
$classes = ($active ?? false)
? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
: 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp --}}

{{-- <a type="button" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a> --}}

<a class="flex btn w-20 justify-center rounded-full bg-transparent border-2 border-neutral-200 px-3 py-1.5 text-sm font-semibold leading-6 text-fuchsia-600 shadow-sm hover:border-fuchsia-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
    {{ $slot }}
</a>