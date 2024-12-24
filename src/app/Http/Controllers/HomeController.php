<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Post;

class HomeController extends Controller{

    public function index(){
        $title = 'Home Page';

        /* $posts = Post::all()->toArray();
        dump($posts); */

        /* $posts = Post::query()->first()->toArray();
        dump($posts); */

        /* $posts = Post::query()->find(2, ['id', 'title', 'slug'])->toArray();
        dump($posts); */

        /* $countries = Country::all(['Code', 'Name', 'Population'])->toArray();
        dump($countries); */

        /* $countries = Country::query()
            ->where('Population', '>', 100_000_000)
            ->orderBy('Population', 'desc')
            ->limit(5)
            ->get(['Code', 'Name', 'Population']); */
        //return $countries->toJson();
        //return response()->json($countries);

        /* $country = Country::query()->first();
        dump($country->toArray()); */

        $country = Country::query()->first();
        dump($country->toArray());
        /* dump($country->Code); */

        //return View('home.index', compact('title'));
    }

}
