<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request ;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/page1', function () {
    return "<h1> My first Page </h1>";
});

Route::get('/page2/{id}', function ($id) {
    return "<h1> number user $id </h1>";
})->where('id', '[1-9]+');

Route::get('/show/{name}',[\App\Http\Controllers\HomeController::class , 'show'] );
Route::get('article/{n}', function($n) {
    return view('article')->with('numero', $n);
})->where('n', '[0-9]+');


Route::get('/form', [\App\Http\Controllers\HomeController::class, 'form']);
Route::get('/result',function (Request $request ) {
    return $request->age;
} );
Route::middleware(\App\Http\Middleware\VerifAge::class)->group(
    function() {
        Route::get('/result',function (Request $request ) {
            return $request->age;
        } );

    }
);
