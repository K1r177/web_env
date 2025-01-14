<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

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

        /* $category = Category::query()->find(1);
        dump($category->posts()->orderBy('id', 'desc')->get()->toArray()); */

        /* $post = Post::query()->find(1);
        $tags = $post->tags;
        dump($tags);

        foreach($tags as $tag){
            //echo "{$tag->title} | {$tag->pivot->created_at}<br>";
            echo "{$tag->title} | {$tag->ts->created_at}<br>";
        } */

        /* $tag = Tag::query()->find(3);
        dump($tag->posts); */

        //$posts = Post::all();
        /* $posts = Post::with('tags')->get();
        foreach($posts as $post){
            echo "{$post->title}<br>";
            foreach($post->tags as $tag){
                echo"{$tag->title}<br>";
            }
            echo "<hr>";
        } */

        //dump(Category::query()->find(1)->posts);
        //dump(Category::query()->find(1)->latestPost);
        //dump(Category::query()->find(1)->oldestPost);
        dump(Category::query(1)->find(1)->latestActivePost);

    }
}
