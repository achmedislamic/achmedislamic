<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Tabel Proyek
    </h2>
</x-slot>

<div class="container mt-5">
    <form wire:submit.prevent="simpan">
    <x-modal.card title="Proyek" wire:model.defer="modal" blur>

            <div class="flex flex-col space-y-3 mx-2">
                <x-input label="Judul Proyek" wire:model="proyek.judul" />
            </div>

            <x-slot name="footer">
                <div class="flex flex-row">
                    <div class="ml-auto flex flex-row">
                        <x-button flat label="Cancel" x-on:click="close" />
                        <x-button label="Simpan" type="submit" primary />
                    </div>
                </div>
            </x-slot>


    </x-modal.card>
    </form>
    <x-card>
        <div class="flex flex-col px-2">
            <div>
                <x-button label="Tambah" onclick="$openModal('modal')" positive />
            </div>
            <table class="table-auto mt-3 shadow rounded-lg overflow-hidden">
                <thead>
                    <tr>
                        <x-th-sort sortBy="judul" :sortField="$sortField" :sortAsc="$sortAsc">Proyek</x-th-sort>
                        <x-th>Aksi</x-th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($proyeks as $proyek)
                        <tr>
                            <x-td>{{ $proyek->judul }}</x-td>
                            <x-td>
                                <x-button warning wire:click="bukaModal({{ $proyek->id }})" label="Ubah" />
                                @if($confirming === $proyek->id)
                                    <x-button label="Anda yakin?" wire:click="destroy({{ $proyek->id }})" danger />
                                @else
                                    <x-button label="Hapus" wire:click="confirmDelete({{ $proyek->id }})" dark />
                                @endif
                            </x-td>
                        </tr>

                    @endforeach

                </tbody>
            </table>
        </div>

    </x-card>
</div>
