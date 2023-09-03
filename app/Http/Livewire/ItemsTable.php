<?php

namespace App\Http\Livewire;
use App\Models\items;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;

class ItemsTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('item_id')
                ->sortable()
                ->searchable(),
            Column::make('item_code')
                ->sortable()
                ->searchable(),
            Column::make('item_name')
                ->sortable()
                ->searchable(),
            Column::make('quantity')
                ->sortable()
                ->searchable(),
            Column::make('status')
                ->sortable()
                ->searchable(),
            Column::make('Created At', 'created_at')
                ->sortable()
                ->searchable(),
            Column::make('Updated At', 'updated_at')
                ->sortable()
                ->searchable(),

        ];
    }
    public function configure(): void
    {
    }
    public function render()
    {
        return view('livewire.items-table');
    }

    public function query(): Builder
    {
        return items::with('role')
        ->withCount('permissions');
    }
}
