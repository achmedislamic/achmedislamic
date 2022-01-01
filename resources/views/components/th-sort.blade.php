@props(['sortBy', 'sortField', 'sortAsc'])

<x-th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
  <x-button flat spinner="sortBy('{{ $sortBy }}')" wire:click="sortBy('{{ $sortBy }}')">
      <div class="text-black dark:text-white font-bold">{{ $slot }}</div>
      @if ($sortField !== $sortBy)
          <span></span>
      @elseif($sortAsc)
          <x-icon name="sort-descending" class="w-5 h-5 dark:text-white text-black" />
      @else
          <x-icon name="sort-ascending" class="w-5 h-5 dark:text-white text-black" />
      @endif
  </x-button>
</x-th>
