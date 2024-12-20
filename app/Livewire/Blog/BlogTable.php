<?php

namespace App\Livewire\Blog;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Blog;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;

class BlogTable extends DataTableComponent
{
    protected $model = Blog::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id')->sortable(),
            Column::make('Category', 'category.name')->sortable(),
            Column::make('Title', 'title')->sortable(),
            Column::make('Slug', 'slug')->sortable(),
			BooleanColumn::make('Active', 'is_active'),
            Column::make('Published at', 'published_at')->sortable(),
            Column::make('Created at', 'created_at')->sortable(),
            Column::make('Updated at', 'updated_at')->sortable(),
			Column::make('Action')
				->label(
					fn($row, Column $column) => view('components.table-action')->with(['edit' => route('blogs.edit', $row->id), 'delete' => true, 'id' => $row->id])
				)
        ];
    }
}
