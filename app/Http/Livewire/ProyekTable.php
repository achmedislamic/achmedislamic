<?php

namespace App\Http\Livewire;

use App\Models\Proyek;
use Livewire\Component;
use Livewire\WithPagination;

class ProyekTable extends Component
{
    use WithPagination, WithSorting;

    public $confirming;
    public $search;
    public $rows = 10;
    public $modal = false;
    public Proyek $proyek;
    protected $queryString = ['search', 'sortAsc', 'sortField'];

    protected $rules = [
        'proyek.judul' => 'required'
    ];

    public function mount()
    {
        $this->proyek = new Proyek();
    }

    public function simpan()
    {
        $this->validate();

        $this->proyek->save();

        $this->tutupModal();
    }

    public function bukaModal(Proyek $proyek)
    {
        $this->proyek = $proyek;
        $this->modal = true;
    }

    public function tutupModal()
    {
        $this->modal = false;
        $this->proyek = new Proyek();
    }

    public function render()
    {
        $proyeks = Proyek::orderBy('judul')
            ->when($this->sortField, function ($query) {
                $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
            })
            ->orderBy('id', 'DESC')
            ->paginate($this->rows);
        return view('livewire.proyek-table', compact('proyeks'))
            ->layout('layouts.admin');
    }
}
