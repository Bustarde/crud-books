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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/books', [BookController::class, 'index']);
Route::get('/edit-book/{id}', [BookController::class, 'showEditForm']);
Route::post('/save-edit-book', [BookController::class, 'saveBookChanges']);
Route::get('/new-book-form', [BookController::class, 'showNewForm']);
Route::post('/save-new-book', [BookController::class, 'saveNewBook']);
Route::get('/delete-book/{id}', [BookController::class, 'deleteBook']);
