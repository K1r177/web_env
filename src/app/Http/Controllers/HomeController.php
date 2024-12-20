<?php
namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class HomeController extends Controller{

    public function index(){

        $users = [];
        //$users = DB::table('users')->get(['id', 'name', 'email']);
        //$user = DB::table('users')->where('id', '=', 3)->first();
        //$users = DB::table('users')->where('id', '>', 3)->get();
        //$users = DB::table('users')->where('id', '>', 3)->value('name');
        //$users = DB::table('users')->where('id', '<', 10)->orderBy('name', 'desc')->get();
        //$users = DB::table('users')->where('id', '<', 10)->orderByDesc('name')->get();
        //$users = DB::table('users')->find(3, ['id', 'name', 'email']);
        //$users = DB::table('users')->pluck('email');
        //$cities = DB::table('city')->get();
        /* DB::table('city')->orderBy('id')->chunk(100, function(Collection $cities){
            foreach($cities as $city){

            }
        }); */
        //$cities = DB::table('city')->limit(10)->get(['id', 'name']);
        //$cities = DB::table('city')->select('id', 'name')->limit(10)->get();
        /* $cities = DB::table('city')
            ->where('id', '>', 3)
            ->where('id', '<', 10)
            ->get(); */
        /* $cities = DB::table('city')
        ->where([['id', '>', 3], ['id', '<', 10]])
        ->get(); */
        /* $cities = DB::table('city')
        ->whereRaw('(ID between ? and ? and Name != ?) or (ID = ?)', [2, 10, 'Qandahar', 1])
        ->get(); */
        //$cities = DB::table('city')->count();
        //$cities = DB::table('city')->max('Population');
        $cities = DB::table('city')->min('Population');
        dump($cities);
        //return View::make('home.index', compact('users'));

    }

}
