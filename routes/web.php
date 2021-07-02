<?php

use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
})->name('welcome');
Route::post('/books', [BooksController::class, 'findBook'])->name('findBook');
Route::post('/books/add', [BooksController::class, 'addBook'])->name('add');
/* Route::get('/books', function () {
    return view('results');
});
 */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
