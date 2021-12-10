<?php

use App\Http\Controllers\BookController;
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
    return view('welcome');
});

Route::get('/create', [BookController::class, 'getcreatepage'])->name('getcreatepage');

Route::post('\create-book', [BookController::class, 'createbook'])->name('createbook');

Route::get('get-books', [bookcontroller::class, 'getbooks'])->name('getbooks');

Route::get('/hello', function () {
    echo('Hello World');
});