<div>
    <form wire:submit.prevent="simpan" class="flex flex-row space-x-3 mb-3">
        <div class="w-full"><x-input wire:model.defer="kodeDiskon" placeholder="Kode Diskon" class="text-black" /></div>
        <div>
            <x-button positive label="Simpan" type="submit" />
        </div>
    </form>

    <a target="_blank" href="{{ $href }}" class="block rounded-lg bg-blue-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-blue-700 focus-visible:ring active:text-gray-700 md:text-base">{!! $harga !!}</a>
</div>
