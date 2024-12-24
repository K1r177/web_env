<?php

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('countries', function(){

    return Country::query()
        ->where('Population', '>', 100_000_000)
        ->orderBy('Population', 'desc')
        ->limit(5)
        ->get();

});
