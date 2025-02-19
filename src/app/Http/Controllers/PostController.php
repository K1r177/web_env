<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function create()
    {
        return view('posts.create', ['title' => 'Add post']);
    }

    public function store(StorePostRequest $request)
    {

        /* dump($request->title);
        dump($request->content); */
        /* $validated = $request->validate([
            'title' => ['required', 'max:5'],
            'slug'  => ['required', 'max:255', 'unique:posts'],
            'content' => ['required'],
            'category_id' => ['required', 'exists:categories,id']
        ], [
            'title.required' => ':attribute required!',
            'title.max' => ':attribute max'
        ]); */
        Post::query()->create($request->all());
        return redirect()->route('posts.create')->with('success', 'Post saved');
       // dump($request->all());
        /* dump($request->all(['slug', 'category_id'])); */
    }

}
