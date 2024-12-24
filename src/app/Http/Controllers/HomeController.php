<?php
namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller{

    public function index(){

        /* $country = Country::query()->find('AFG');
        dump($country->toArray()); */

        /* dump('Count: '.Country::query()->count());
        dump('Count: '.Country::query()->where('Population', '>', 1_000_000)->count());
        dump('Max: '.Country::query()->max('Population'));
        dump('Min: '.Country::query()->min('Population'));
        dump('Avg: '.Country::query()->avg('Population')); */

        /* $country = Country::query()->find('AFG2');
        if(!$country){
            abort(404);
        } */

        /* $country = Country::query()->findOrFail('AFG2');
        dump($country); */

        /* $post = new Post();
        $post->title = 'Post 5';
        $post->content = 'Post 5 content';
        $post->category_id = rand(1, 2);
        dump($post);
        dump($post->save());
        dump($post->id); */

        /* dump(Post::query()->create([
            'title' => 'Post 7',
            'content' => 'Post 7 content',
            'category_id' => rand(1, 2),
            'status' => 0
        ])); */

        /* $post = Post::query()->find(2);
        dump($post->delete()); */

        dump(Post::destroy(9, 10));

    }

    public function store(Request $request){
        var_dump($request->title);
        var_dump($request->all());
        Post::query()->create($request->all());
        return $request->all();
    }

    public function update(Request $request){

        /* $post = Post::query()->find($request->id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->status = $request->status;
        $post->save();*/

        /* $post = Post::query()->findOrFail($request->id);
        $post->update($request->all()); */

        /* var_dump(
            Post::query()
                ->where('id', $request->id)
                ->update($request->all())
        );
        return 'OK'; */




    }

}
