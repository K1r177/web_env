<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller{
    public function index(){
        /* $category = Category::query()->find(2);
        dump($category->toArray());

        dump($category->title);

        dump($category->getPost->toArray());

        dump($category->getPost->title); */

       /*  $post = Post::query()->where('category_id', '=', 2)->first();
        dump($post->toArray()); */

        /* $post = Post::query()->find(5);
        dump($post->toArray());
        dump($post->category);
        dump($post->category->title); */

        /* $category = Category::query()->find(1);
        dump($category->toArray());
        $posts = $category->posts;
        dump($posts->toArray()); */

        /* $post = Post::query()->find(6);
        dump($post->toArray());
        dump($post->category->toArray()); */

        /* $categories = Category::with('posts')->get();
        dump($categories->toArray());

        foreach($categories as $category){
            echo "{$category->title}<br>";
            foreach($category->posts as $post){
                echo "{$post->title}<br>";
            }
            echo '<hr>';
        } */

        /* $categories = Category::query()->withCount('posts')->get();
        dump($categories);
        foreach($categories as $category){
            echo "{$category->title} | ({$category->posts_count})<br>";
        } */

        $category = Category::query()->find(1);
        dump($category->posts()->orderBy('id', 'desc')->get()->toArray());

    }
}
