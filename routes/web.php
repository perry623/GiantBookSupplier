<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

// Route::get('/', function () {
//     return view('home',[
//         'categories'=>['a','b','c'],
//         'books'=>['a','b','c','d']]);
// });

Route::controller(BookController::class)->group(function () {
        Route::get('/', 'showBooks')->name('home');
        Route::get('/detail/{id}', 'showDetail')->name('detail');
});