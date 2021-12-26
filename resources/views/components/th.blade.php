@props(['sortBy', 'sortField'])

<th class="border border-1 border-green-600 p-2">
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
</th>
