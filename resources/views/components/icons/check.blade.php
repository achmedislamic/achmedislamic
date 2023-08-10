@props(['textColor' => 'text-blue-500'])
<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'h-6 w-6 shrink-0 ' . $textColor]) }} fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
</svg>
