@section('judul')
    Daftar Proyek
@endsection
<x-admin-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            Daftar Proyek
        </h2>
    </x-slot>

    <div class="row">
        <div class="col mb-4">
            <a class="btn btn-primary" href="{{ route('tambah_proyek') }}" role="button">Tambah Proyek</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @forelse ($proyeks as $proyek)
                        <tr>
                            <td scope="row">{{ $no++ }}</td>
                            <td>{{ $proyek->judul }}</td>
                            <td>{{ $proyek->deskripsi }}</td>
                            <td>
                            <a href="{{ route('ubah_proyek', $proyek->id) }}">Ubah</a> | <a href="#">Hapus</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Tidak ada data!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
</x-admin-layout>