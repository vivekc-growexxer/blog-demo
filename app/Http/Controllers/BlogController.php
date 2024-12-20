<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pageTitle'] = 'Blogs';

        return view('blog.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['pageTitle']  = 'Create Blog';
		$data['categories'] = Category::get(['name', 'id']);

        return view('blog.create', $data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['pageTitle']  = 'Blog Details';
		$data['blog']       = Blog::where('id', $id)->first();

		if ($data['blog']) {
			return view('blog.show', $data);
		} else {
			return to_route('blogs.index')->with([config('constants.SESSION.ERROR') => __('messages.not_found', ['item' => 'Blog'])]);
		}
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['pageTitle']  = 'Edit Blog';
		$data['categories'] = Category::get(['name', 'id']);
		$data['blog']       = Blog::where('id', $id)->first();

		if ($data['blog']) {
			return view('blog.edit', $data);
		} else {
			return to_route('blogs.index')->with([config('constants.SESSION.ERROR') => __('messages.not_found', ['item' => 'Blog'])]);
		}
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::where('id', $id)->first();

		if ($blog) {
			$blog->delete();

			return to_route('blogs.index')->with([config('constants.SESSION.SUCCESS') => __('messages.deleted', ['item' => 'Blog'])]);
		} else {
			return to_route('blogs.index')->with([config('constants.SESSION.ERROR') => __('messages.not_found', ['item' => 'Blog'])]);
		}
    }
}
