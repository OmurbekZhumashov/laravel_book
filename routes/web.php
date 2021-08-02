<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BooksController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/', [App\Http\Controllers\BooksController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware(['role:admin'])->prefix('admin_panel')->group( function () {

    Route::get('/',[App\Http\Controllers\Admin\HomeController::class, 'index']);

    Route::resource('books', BooksController::class);

});