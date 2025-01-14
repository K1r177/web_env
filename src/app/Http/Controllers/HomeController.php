<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class HomeController extends Controller{
    public function index(){
        /* Post::query()->create([
            'title' => 'Post 6',
            'slug' => 'post-6',
            'content' => 'Lorem ipsum...',
            'category_id' => 4
        ]); */
        /* $category = Category::query()->find(2);
        $category->posts()->save(new Post([
            'title' => 'Post 7',
            'slug' => 'post-7',
            'content' => 'Lorem ipsum...'
        ]));*/
        /* $category = Category::query()->find(2);
        $category->posts()->saveMany([
            new Post([
                'title' => 'Post 8',
                'slug' => 'post-8',
                'content' => 'Lorem ipsum...'
            ]),
            new Post([
                'title' => 'Post 9',
                'slug' => 'post-9',
                'content' => 'Lorem ipsum...'
            ]),
        ]); */
       /*  $category = Category::query()->find(3);
        dump($category->posts);
        $category->posts()->create([
            'title' => 'Post 14',
            'slug' => 'post-14',
            'content' => 'Lorem ipsum...'
        ]);
        $category->refresh();
        dump($category->posts); */

        /* $category = Category::query()->find(4);
        $post = Post::query()->find(15);
        $post->category()->associate($category);
        $post->save(); */

        /* $post = Post::query()->find(15);
        $post->category()->dissociate();
        $post->save(); */

        $post = Post::query()->find(11);
        //$post->tags()->attach(2);
        //$post->tags()->attach([1, 4]);
        //$post->tags()->detach([2]);
        //$post->tags()->sync([1, 2, 4]);
        $post->tags()->toggle([1, 2, 4, 5]);

    }
}
