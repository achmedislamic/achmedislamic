<form wire:submit.prevent="{{ $alamat_submit }}">
    <div class="form-group">
        <label for="judul">Judul Proyek</label>
        <input wire:model="judul" type="text" value="{{ $judul }}"
            class="form-control" name="judul" id="judul" placeholder="Judul Proyek">
        @error('judul')
            <div class="p-3 mb-2 bg-danger text-white">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="deskripsi">Deskrisi Proyek</label>
        <textarea wire:model.lazy="deskripsi" class="form-control" name="deskripsi" id="deskripsi" rows="5">{{ $deskripsi }}</textarea>
        @error('deskripsi')
            <div class="bg-danger text-white p-3 mb-2">
                {{ $message }}
            </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>