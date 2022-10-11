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

Route::get('/', function () {
    $data = [
        'comics' =>config('comics')
    ];
    return view('home', $data);
});

Route::get('/single', function () {
    return view('single');
});

Route::get('/comics/{index}', function ($index) {
    $comics = config('comics');
    if($index < count($comics)){
        $comic = $comics[$index];
        $data = [
            'comic' => $comic
        ];

        return view('show', $data);
    }else{
        abort(404);
    }
})->where('index', '[0-9]+')->name('prodotto');
