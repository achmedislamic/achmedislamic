<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Tabel Proyek
    </h2>
</x-slot>

<div class="container mt-5">
    <x-card>
        <table class="table-auto">
            <thead>
                <tr>
                    <x-th sortBy="proyek" :sortField="$sortField" :sortAsc="$sortAsc">Proyek</x-th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proyeks as $proyek)
                    <tr class="{{ $pokir->deleted_at !== null ? 'bg-danger text-white' : '' }}">
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            @if (auth()->user()->wewenang === 'admin' || (auth()->user()->wewenang !== 'admin' && $is_tahapan_aktif && (now() <= $jadwal->tanggal_selesai && now() >= $jadwal->tanggal_mulai)))
                                @if ($pokir->deleted_at !== null)
                                    Dihapus
                                @else
                                    <input type="checkbox" wire:click="check({{ $pokir->id }}, '{{ $pokir->dewan_id }}')" {{ $pokir->is_centang ? 'checked' : '' }} wire:loading.remove>
                                    <div wire:loading>
                                        <div class="spinner-border text-primary" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>
                                @endif
                            @else
                                Tahapan ini sudah selesai
                            @endif

                        </td>
                        <td>
                            @if (auth()->user()->wewenang === 'admin' || (auth()->user()->wewenang !== 'admin' && $is_tahapan_aktif && (now() <= $jadwal->tanggal_selesai && now() >= $jadwal->tanggal_mulai)))
                                @if ($pokir->deleted_at !== null)
                                    Dihapus
                                @else
                                    {{-- @if ($pokir->jenis_bantuan != 'Hibah Uang' && $pokir->jenis_bantuan != 'Bansos Uang')

                                    @else
                                        Hibah tidak bisa diubah kembali
                                    @endif --}}
                                    <a href="{{ route('pokir.form', $pokir->id) }}" class="btn btn-warning">Ubah</a>
                                    @if($confirming === $pokir->id)
                                    <button wire:click="destroy({{ $pokir->id }})" class="btn btn-danger">Anda yakin?</button>
                                    @else
                                    <button class="btn btn-dark" wire:click="confirmDelete({{ $pokir->id }})">Hapus</button>
                                    @endif
                                @endif

                            @else
                                Tahapan ini sudah selesai
                            @endif


                        </td>
                        @php
                            if(auth()->user()->isAdmin()){
                                echo '<td>'.$pokir->nama_dewan.'</td>';
                            }
                        @endphp

                        <td>{{ $pokir->usulan }}</td>
                        <td>{{ $pokir->kab_kota }}</td>
                        <td>{{ $pokir->kecamatan }}</td>
                        <td>{{ $pokir->kelurahan }}</td>
                        <td>{{ $pokir->alamat }}</td>
                        <td>{{ $pokir->volume }}</td>
                        <td>{{ $pokir->satuan }}</td>
                        <td class="text-right">
                            {{ Money::format($pokir->anggaran) }}
                            @php
                                if($pokir->deleted_at === null)
                                {
                                    $anggaran += $pokir->anggaran;
                                }

                            @endphp
                        </td>
                        <td>{{ $pokir->jenis_bantuan }}</td>
                        <td>{{ $pokir->opd }}</td>
                        <td>{{ $pokir->keterangan }}</td>
                    </tr>

                @endforeach

            </tbody>
            <tfoot>
                @if ($mode === 'biasa')
                    <tr>
                        <td colspan="11" class="text-right font-bold">Total:</td>
                        <td class="text-right"><b>{{ Money::format($anggaran) }}</b></td>
                    </tr>
                @else
                    <tr>
                        <td colspan="18" class="text-right font-bold">Total:</td>
                        <td class="text-right"><b>{{ Money::format($anggaran_lama) }}</b></td>
                        <td class="text-right"><b>{{ Money::format($anggaran) }}</b></td>
                    </tr>
                @endif

            </tfoot>
        </table>
    </x-card>
</div>
