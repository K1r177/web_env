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

        $post = Post::query()->find(5);
        dump($post->toArray());
        dump($post->category);
        dump($post->category->title);
    }
}
