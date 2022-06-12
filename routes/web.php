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
    return view('characters');
    
})->name('characters');

Route::get('/comics', function () {

    $comics = config('db.comics');
    
    
    return view('comics', compact('comics'));
})->name('comics');


Route::get('/movies', function () {
    return view('movies');
})->name('movies');


Route::get('/tv', function () {
    return view('tv');
})->name('tv');


Route::get('/games', function () {
    return view('games');
})->name('games');;


Route::get('/collectbles', function () {
    return view('collectbles');
})->name('collectbles');;


Route::get('/videos', function () {
    return view('videos');
})->name('videos');;


Route::get('/fans', function () {
    return view('fans');
})->name('fans');;


Route::get('/news', function () {
    return view('news');
})->name('news');;


Route::get('/shop', function () {
    return view('shop');
})->name('shop');;

Route::get('/comics/{id}', function($id){
    $comics = config('db.comics');
    
    
    if($id >=0 && is_numeric($id) && $id< count($comics)){
        
        
        $comic = $comics[$id];
        $response = data_get($comic, 'artists', 0);
        $responses = data_get($comic, 'writers', 0);
       ;
        
        return view('comics.show', compact('comic', 'response', 'responses'));
    }else{
        abort(404);
    }

})->name('single-comic');