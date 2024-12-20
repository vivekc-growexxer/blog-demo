<?php

namespace App\Livewire\Forms;

use App\Models\Blog;
use Illuminate\Validation\Rule;
use Livewire\Form;

class BlogForm extends Form
{
	public ?Blog $blog;

	public ?int $id;
	public int $category_id;
	public string $title        = '';
	public string $slug         = '';
	public string $description  = '';
	public string $published_at = '';
	public bool $is_active = false;

	public function rules(): array
	{
		return [
			'category_id'  => ['required', 'integer', 'exists:categories,id'],
			'title'        => ['required', 'string', 'min:5', 'max:255'],
			'slug'         => ['required', 'string', 'min:5', 'max:255', Rule::unique('blogs', 'slug')->ignore($this->id ?? 0)],
			'description'  => ['required', 'string', 'min:5', 'max:255'],
			'is_active'    => ['nullable', 'boolean'],
			'published_at' => ['nullable', 'date'],
		];
	}

	public function messages(): array
	{
		return [
			'category_id.required' => 'Please select a category.',
			'title.required'       => 'Please enter a blog title.',
			'slug.required'        => 'Please enter a blog slug.',
			'slug.unique'          => 'Slug name already exists.',
		];
	}

	public function setBlog($blog)
	{
		$this->blog = $blog;

		$this->id           = $blog->id;
		$this->category_id  = $blog->category_id;
		$this->title        = $blog->title ?: '';
		$this->slug         = $blog->slug ?: '';
		$this->description  = $blog->description ?: '';
		$this->is_active    = $blog->is_active ?: false;
		$this->published_at = $blog->published_at ?: '';
	}

	public function store()
	{
		$this->validate();

		Blog::create($this->all());
	}

	public function update()
	{
		$this->validate();

		$this->blog->update($this->all());
	}
}
