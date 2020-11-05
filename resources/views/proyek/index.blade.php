@section('judul')
    Daftar Proyek
@endsection

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('hapus_proyek') }}" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Proyek</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <h3>Apakah anda yakin menghapus data ini?</h3>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="proyek_id" value="" id="proyek_id">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>

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
                                <a href="{{ route('ubah_proyek', $proyek->id) }}">Ubah</a> | 
                                <a href="#" data-toggle="modal" data-target="#deleteModal" data-proyek_id="{{ $proyek->id }}">Hapus</a>
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

<script>
    $('#deleteModal').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget) // Button that triggered the modal
        let proyek_id = button.data('proyek_id') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('#proyek_id').val(proyek_id)
    })
</script>