<button 
{{ $attributes->class([
    'flex items-center justify-center cursor-pointer w-9 h-9 py-3 text-center text-[18px] text-gray-700 transition duration-200 ease-in-out rounded-full hover:bg-gray-100',
]) }}>
    {{ $slot }}
</button>