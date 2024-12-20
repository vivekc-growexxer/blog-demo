<?php

namespace App\Livewire\Blog;

use App\Livewire\Forms\BlogForm;
use Illuminate\Support\Str;
use Livewire\Component;

class Edit extends Component
{
	public object $categories;

	public BlogForm $form;

	public function mount($categories, $blog)
	{
		$this->categories = $categories;
		$this->form->setBlog($blog);
	}

	public function updatedFormTitle()
	{
		$this->form->slug = Str::slug($this->form->title, '-');
	}

	public function save()
	{
		$this->form->update();

		return to_route('blogs.index')->with([config('constants.SESSION.SUCCESS') => __('messages.updated', ['item' => 'Blog'])]);
	}

    public function render()
    {
        return view('livewire.blog.edit');
    }
}
