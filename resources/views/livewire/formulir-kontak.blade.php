<form wire:submit.prevent="simpan" id="form_kontak">
    <div>
        @if (session()->has('message'))
            <div class="p-3 mb-2 bg-green-600 rounded-md text-white" id="message">{{ session('message') }}</div>
        @else
            @csrf
            <x-form-group>
                <label for="nama" class="text-left mb-2 text-white w-64">Nama Lengkap</label>
                <div class="flex flex-col w-full">
                    <input wire:model="nama" required type="text" class="rounded-md border-0 w-full dark:bg-gray-200" name="nama" id="nama" placeholder="Isi nama lengkap anda">
                    @error('nama') <div class="p-3 my-2 bg-red-500 rounded-md text-white text-left">{{ $message }}</div> @enderror
                </div>

            </x-form-group>
            <x-form-group>
                <label for="email" class="text-left text-white mb-2 w-64">Email</label>
                <div class="flex flex-col w-full">
                    <input wire:model="email" required type="email" class="rounded-md border-0 w-full dark:bg-gray-200" name="email" id="email" placeholder="Email anda">
                    @error('email') <div class="p-3 my-2 bg-red-500 rounded-md text-white text-left">{{ $message }}</div> @enderror
                </div>

            </x-form-group>
            <x-form-group>
                <label for="pesan" class="text-left text-white mb-2 w-64">Pesan</label>
                <div class="flex flex-col w-full">
                    <textarea wire:model="pesan" required class="rounded-md border-0 w-full dark:bg-gray-200" name="pesan" id="pesan" rows="5" placeholder="Ada pertanyaan, kritik, saran atau proyek kerjasama?"></textarea>
                    @error('pesan') <div class="p-3 my-2 bg-red-500 rounded-md text-white text-left">{{ $message }}</div> @enderror
                </div>

            </x-form-group>
            <button type="submit" class="bg-green-600 rounded-md text-white p-2 hover:bg-green-700">Kirim</button>
        @endif
    </div>
</form>
