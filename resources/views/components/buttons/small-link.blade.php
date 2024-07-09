@props([
    'href'
])

<a href="{{ $href }}" class="flex items-center justify-center cursor-pointer w-9 h-9 py-3 text-center text-[21px] text-gray-700 transition duration-200 ease-in-out  rounded-full hover:bg-gray-100 text-lg">
    {{ $slot }}
</a>