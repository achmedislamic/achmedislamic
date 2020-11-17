<form wire:submit.prevent="{{ $alamat_submit }}">
    <div class="form-group">
    <label for="judul">Judul Proyek {{ $proyek_id }}</label>
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

    @if ($gambar)
        Gambar yang akan diupload:
        @if($alamat_submit == 'simpan')
            <img src="{{ $gambar->temporaryUrl() }}">
        @else
            <img src="{{ Storage::url($gambar) }}">
        @endif
        
    @endif

    <div class="form-group">
        <label for="gambar">Gambar</label>
        <input wire:model="gambar" type="file" class="form-control" name="gambar" id="gambar">
        @error('gambar')
            <div class="bg-danger text-white p-3 mb-2">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group">
      <label for="url">URL</label>
      <input wire:model="url" type="text" class="form-control" name="url" id="url" placeholder="Masukkan URL">
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>