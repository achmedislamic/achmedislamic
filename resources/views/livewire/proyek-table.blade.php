<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Tabel Proyek
    </h2>
</x-slot>

<div class="container mt-5">
    <x-modal.card title="Edit Customer" blur wire:model.defer="modal">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <x-input label="Name" placeholder="Your full name" />
            <x-input label="Phone" placeholder="USA phone" />

            <div class="col-span-1 sm:col-span-2">
                <x-input label="Email" placeholder="example@mail.com" />
            </div>

            <div class="col-span-1 sm:col-span-2 cursor-pointer bg-gray-100 rounded-xl shadow-md h-72 flex items-center justify-center">
                <div class="flex flex-col items-center justify-center">
                    <x-icon name="cloud-upload" class="w-16 h-16 text-blue-600" />
                    <p class="text-blue-600">Click or drop files here</p>
                </div>
            </div>
        </div>

        <x-slot name="footer">
            <div class="flex justify-between gap-x-4">
                <x-button flat negative label="Delete" wire:click="delete" />

                <div class="flex">
                    <x-button flat label="Cancel" x-on:click="close" />
                    <x-button primary label="Save" wire:click="save" />
                </div>
            </div>
        </x-slot>
    </x-modal.card>
    <x-card>
        <div class="flex flex-col">
            <div>
                <x-button label="Tambah" onclick="$openModal('modal')" positive />
            </div>
            <table class="table-auto">
                <thead>
                    <tr>
                        <x-th sortBy="judul" :sortField="$sortField" :sortAsc="$sortAsc">Proyek</x-th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($proyeks as $proyek)
                        <tr>
                            <td>{{ $proyek->judul }}</td>
                            <td>
                                <x-button warning wire:click="bukaModal({{ $proyek->id }})" label="Ubah" />
                                @if($confirming === $proyek->id)
                                    <x-button label="Anda yakin?" wire:click="destroy({{ $proyek->id }})" danger />
                                @else
                                    <x-button label="Hapus" wire:click="confirmDelete({{ $proyek->id }})" warning />
                                @endif
                            </td>
                        </tr>

                    @endforeach

                </tbody>
            </table>
        </div>

    </x-card>
</div>
