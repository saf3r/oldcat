@props([
    'href'
])

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'flex items-center justify-center h-[38px] space-x-3 cursor-pointer rounded-md bg-basic py-2 px-5 text-center text-sm font-medium text-white transition duration-200 ease-in-out hover:bg-basic-hover']) }}>
    {{ $slot }}
</a>

