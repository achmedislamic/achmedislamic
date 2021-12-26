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
    protected $queryString = ['search', 'sortAsc', 'sortField'];

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
