<form wire:submit.prevent="simpan" id="form_kontak">
    @csrf
    <x-form-group>
        <label for="nama" class="text-left mb-2 text-white w-64">Nama Lengkap</label>
        <input wire:model="nama" required type="text" class="rounded-md border-0 w-full" name="nama" id="nama" placeholder="Isi nama lengkap anda">
        @error('nama') <div class="p-3 mb-2 bg-danger text-white">{{ $message }}</div> @enderror
    </x-form-group>
    <x-form-group>
        <label for="email" class="text-left text-white mb-2 w-64">Email</label>
        <input wire:model="email" required type="email" class="rounded-md border-0 w-full" name="email" id="email" placeholder="Email anda">
        @error('email') <div class="p-3 mb-2 bg-danger text-white">{{ $message }}</div> @enderror
    </x-form-group>
    <x-form-group>
        <label for="pesan" class="text-left text-white mb-2 w-64">Pesan</label>
        <textarea wire:model="pesan" required class="rounded-md border-0 w-full" name="pesan" id="pesan" rows="5" placeholder="Ada pertanyaan, kritik, saran atau proyek kerjasama?"></textarea>
        @error('pesan') <div class="p-3 mb-2 bg-danger text-white">{{ $message }}</div> @enderror
    </x-form-group>
    <button type="submit" class="bg-green-600 rounded-lg text-white p-2 hover:bg-green-700">Kirim</button>
    <div>
        @if (session()->has('message'))
            <div class="p-3 mb-2 bg-success text-white" id="message">{{ session('message') }}</div>
            <script>
                $('.form-group').addClass('animate__animated animate__backOutRight');
                var delay = 1000;
                    setTimeout(function() {
                        $('.form-group').hide();
                }, delay);
                $('input[name="_token"]').remove();
                $('button[type="submit"]').hide();
            </script>
        @endif
    </div>
</form>
