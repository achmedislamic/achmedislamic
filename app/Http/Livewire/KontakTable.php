<?php

namespace App\Http\Livewire;

use App\Models\Kontak;
use Livewire\Component;
use Livewire\WithPagination;

class KontakTable extends Component
{
    use WithPagination, WithSorting;

    public $confirming;
    public $search;
    public $rows = 10;
    public $modal = false;
    public Kontak $kontak;
    protected $queryString = ['search', 'sortAsc', 'sortField'];

    public function mount()
    {
        $this->kontak = new Kontak();
    }

    public function bukaModal(Kontak $kontak)
    {
        $this->kontak = $kontak;
        $this->modal = true;
    }

    public function tutupModal()
    {
        $this->modal = false;
        $this->kontak = new Kontak();
    }

    public function render()
    {
        $kontaks = Kontak::when($this->sortField, function ($query) {
            $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
        })
            ->paginate($this->rows);
        return view('livewire.kontak-table', compact('kontaks'))
            ->layout('layouts.admin');
    }
}
