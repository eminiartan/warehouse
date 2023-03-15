@props([
'active' => false,
'disabled' => false,
'size' => 'sm',
'rounded' => 'md',
'styles' => 'text-xs font-bold text-center text-white uppercase transition-all ease-in-out group text-6 duration-250 border-2 border-transparent hover:bg-white group',
'primary' => false,
'href' => false,
])

@if($href)
    <a href="{{ $href }}" {{ $attributes->class
    ([$styles, $primary ? 'bg-red-900 hover:border-red-900 hover:text-red-900' : 'bg-blue-900 hover:border-blue-900 hover:text-blue-900',
    'px-5 py-3' => $size == 'sm',
    'px-10 py-3' => $size == 'md',
    'px-7 py-4' => $size == 'lg',
    'rounded-md' => $rounded == 'md',
    'rounded-[50px]' => $rounded == 'lg',
     'active' => $active])->merge(['disabled' => $disabled]) }}>
        {{ $slot }}
    </a>

@else
    <button {{ $attributes->class
    ([$styles, $primary ? 'bg-red-900 hover:border-red-900 hover:text-red-900' : 'bg-blue-900 hover:border-blue-900 hover:text-blue-900',
    'px-5 py-3' => $size == 'sm',
    'px-10 py-3' => $size == 'md',
    'px-7 py-4' => $size == 'lg',
    'rounded-md' => $rounded == 'md',
    'rounded-[50px]' => $rounded == 'lg',
     'active' => $active])->merge(['disabled' => $disabled, 'type' => 'button'])}}>
        {{ $slot }}
    </button>
@endif
