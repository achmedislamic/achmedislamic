@props(['title'])
<li class="relative mb-6 sm:mb-0">
    <div class="flex items-center justify-center md:justify-normal">
        <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
            <x-icons.check class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300"></x-icons.check>
        </div>
        <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
    </div>
    <div class="mt-3 sm:pr-8 space-y-3">
        <h3 class="text-lg/5 font-semibold text-gray-900 dark:text-white text-center md:text-left">{{ $title }}</h3>
        <p class="text-base font-normal dark:text-gray-400">{{ $slot }}</p>
    </div>
</li>
