@section('judul')
    @if(isset($judul))
        {{ $judul }}
    @else
        Tambah Proyek
    @endif
@endsection
<x-admin-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            @if(isset($judul))
                {{ $judul }}
            @else
                Tambah Proyek
            @endif
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