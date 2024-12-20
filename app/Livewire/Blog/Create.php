<?php

namespace App\Livewire\Blog;

use App\Livewire\Forms\BlogForm;
use Illuminate\Support\Str;
use Livewire\Component;

class Create extends Component
{
	public object $categories;

	public BlogForm $form;

	public function mount($categories)
	{
		$this->categories = $categories;
	}

	public function updatedFormTitle()
	{
		$this->form->slug = Str::slug($this->form->title, '-');
	}

	public function save()
	{
		$this->form->store();

		return to_route('blogs.index')->with([config('constants.SESSION.SUCCESS') => __('messages.created', ['item' => 'Blog'])]);
	}

    public function render()
    {
        return view('livewire.blog.create');
    }
}
