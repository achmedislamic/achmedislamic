@section('judul')
    Daftar Kontak
@endsection

<x-admin-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            Daftar Kontak
        </h2>
    </x-slot>

    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Pesan</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @forelse ($kontaks as $kontak)
                        <tr>
                            <td scope="row">{{ $no++ }}</td>
                            <td>{{ $kontak->nama }}</td>
                            <td>{{ $kontak->email }}</td>
                            <td>
                                {{ $kontak->pesan }}
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