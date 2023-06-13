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

Route::controller(BookController::class)->group(function () {
        Route::get('/', 'showBooks')->name('home');
        Route::get('/category/{category}', 'showBooksCategory');
        Route::get('/detail/{id}', 'showDetail')->name('detail');
        Route::get('/publishers', 'showPublisher');
        Route::get('/publisher/{id}', 'showPublisherDetails');
        Route::get('/contact', 'contact');
        Route::get('/CRUD', 'CRUD_view');
        Route::post('/CRUDpost', 'CRUD_pro')->name("upload");


    });