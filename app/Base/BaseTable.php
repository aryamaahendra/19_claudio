<?php

namespace App\Base;

use Illuminate\Database\Eloquent\Builder;
use Livewire\Volt\Component;
use Livewire\WithPagination;

abstract class BaseTable extends Component
{
    use WithPagination;

    public $perPage = 10;

    public $page = 1;

    public $search = '';

    public $sortBy = 'created_at';

    public $sortDirection = 'desc';

    protected $listeners = ['refresh' => '$refresh'];

    public abstract function query(): Builder;

    public abstract function columns(): array;

    public function data()
    {
        return $this->query()
            ->when($this->sortBy !== '', function ($query) {
                $query->orderBy($this->sortBy, $this->sortDirection);
            })->paginate($this->perPage);
    }

    public function sort($key)
    {
        $this->resetPage();

        if ($this->sortBy === $key) {
            $direction = $this->sortDirection === 'asc' ? 'desc' : 'asc';
            $this->sortDirection = $direction;

            return;
        }

        $this->sortBy = $key;
        $this->sortDirection = 'asc';
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }
}
