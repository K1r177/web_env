<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class HomeController extends Controller{

    public function index(){

        $title = 'Home Page';

        $posts = Post::query()->get();
        dump($posts);

        $posts2 = DB::table('posts')->get();
        dump($posts2);

        $posts3 = DB::select('select * from posts');
        dump($posts3);

        /* $data = [1, 2, 3, 4, 5];
        $data = collect($data);
        dump($data->toArray()); */

       /*  $products = collect([
            ['title' => 'Product 1', 'price' => 10],
            ['title' => 'Product 2', 'price' => 15],
            ['title' => 'Product 3', 'price' => 10],
            ['title' => 'Product 4', 'price' => 20],
            ['title' => 'Product 5', 'price' => 20],
        ]);
        dump($products);
        dump($products->avg('price'));
        dump($products->max('price'));
        dump($products->min('price'));
        dump($products->sum('price'));

        $filtered = $products->filter(function($value, $key){
            return $value['price'] > 10;
        });

        dump($filtered); */

        /* $countries = Country::query()->limit(10)->get(['Name', 'Population', 'Continent']);
        dump($countries);
        $filtered = $countries->filter(function($value, $key){
            return $value['Population'] > 1_000_000;
        });
        dump($filtered->toArray());
        dump($countries->max('Population'));
        dump($countries->min('Population'));
        dump($countries->countBy(function(Country $country){
            return $country->Continent;
        })); */

        return View::make('home.index', compact('title', 'posts', 'posts2', 'posts3'));

    }

}
