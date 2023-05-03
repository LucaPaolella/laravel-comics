<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('home');
});*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/prodotti', function () {

    $pasta = config('db.pasta'); //db['pasta']

    return view('products', compact('pasta'));
})->name('products');



Route::get('/news', function () {
    $news = config('db.news');
    return view('home', compact('news'));
})->name('news');


Route::get('/prodotto/{index}/{count}', function ($index, $count) {

    $pasta_total = config('db.pasta'); //array[0, 1, 2]

    if ($index > count($pasta_total) - 1) {
        abort(404);
    }

    $pasta = $pasta_total[$index]; //[0]

    return view('product', compact('pasta'));
})->name('product')->where('index', '[0-9]+');
