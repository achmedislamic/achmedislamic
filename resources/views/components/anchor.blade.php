@props(['color' => 'text-blue-600 dark:text-blue-300 hover:text-blue-800 hover:dark:text-blue-500'])
<a {{ $attributes->merge(['class' => $color . ' hover:underline hover:cursor-pointer']) }}>{{ $slot }}</a>
