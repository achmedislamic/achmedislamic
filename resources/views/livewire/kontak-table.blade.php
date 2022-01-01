<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Tabel Kontak
    </h2>
</x-slot>

<div class="container mt-5">
    <x-card>
        <div class="flex flex-col px-2">
            <table class="table-auto mt-3 shadow rounded-lg overflow-hidden">
                <thead>
                    <tr>
                        <x-th-sort sortBy="nama" :sortField="$sortField" :sortAsc="$sortAsc">Nama</x-th-sort>
                        <x-th-sort sortBy="email" :sortField="$sortField" :sortAsc="$sortAsc">Email</x-th-sort>
                        <x-th-sort sortBy="pesan" :sortField="$sortField" :sortAsc="$sortAsc">Pesan</x-th-sort>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kontaks as $kontak)
                        <tr>
                            <x-td>{{ $kontak->nama }}</x-td>
                            <x-td>{{ $kontak->email }}</x-td>
                            <x-td>{{ $kontak->pesan }}</x-td>
                        </tr>

                    @endforeach

                </tbody>
            </table>
        </div>

    </x-card>
</div>
