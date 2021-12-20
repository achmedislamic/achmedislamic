@props(['color' => 'text-blue-600 hover:text-blue-800'])
<a {{ $attributes->merge(['class' => $color . ' hover:underline hover:cursor-pointer']) }}>{{ $slot }}</a>
