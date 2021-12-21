<li class="mb-3 flex flex-row border border-gray-500 p-2 rounded-lg drop-shadow-xl hover:bg-gray-100 hover:dark:bg-gray-600">
      <svg class="flex-none items-start mr-3 text-blue-500 w-[36px] h-[36px]">
          <use xlink:href="/css/bootstrap-icons.svg#check-circle-fill" />
      </svg>
      <div class="flex flex-col">
          <h5 class="mt-0 mb-1 font-bold text-md">{{ $title }}</h5>
          <p>
              {{ $slot }}
          </p>

      </div>
  </li>
