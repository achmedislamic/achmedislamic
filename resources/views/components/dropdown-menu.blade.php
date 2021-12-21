<a {{ $attributes->merge(['class' => 'px-4 py-3 flex hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 text-sm font-bold']) }} @click="menu=false">{{ $slot }}</a>
