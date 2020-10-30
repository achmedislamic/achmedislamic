<form wire:submit.prevent="simpan" id="form_kontak">
    @csrf
    <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input wire:model="nama" required type="text" class="form-control" name="nama" id="nama" placeholder="Isi nama lengkap anda">
        @error('nama') <div class="p-3 mb-2 bg-danger text-white">{{ $message }}</div> @enderror
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input wire:model="email" required type="email" class="form-control" name="email" id="email" placeholder="Email anda">
        @error('email') <div class="p-3 mb-2 bg-danger text-white">{{ $message }}</div> @enderror
    </div>
    <div class="form-group">
        <label for="pesan">Pesan</label>
        <textarea wire:model="pesan" required class="form-control" name="pesan" id="pesan" rows="5"></textarea>
        @error('pesan') <div class="p-3 mb-2 bg-danger text-white">{{ $message }}</div> @enderror
    </div>
    <button type="submit" class="btn btn-success mb-3">Kirim</button>

    <div>
        @if (session()->has('message'))
            <div class="p-3 mb-2 bg-success text-white">{{ session('message') }}</div>
            <script>
                var all = document.getElementsByClassName('form_group');
                for (var i = 0; i < all.length; i++) {
                    all[i].style.display = 'none';
                }
            </script>
        @endif
    </div>
</form>