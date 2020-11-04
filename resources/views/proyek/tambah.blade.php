@section('judul')
    Tambah Proyek
@endsection
<x-admin-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            Tambah Proyek
        </h2>
    </x-slot>

    <div class="row">
        <div class="col">
            @if(isset($proyek))
                @livewire('tambah-proyek', [
                    'proyek' => $proyek
                ])
            @else
                @livewire('tambah-proyek')
            @endif
            
        </div>
    </div>
    
</x-admin-layout>