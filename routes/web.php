<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('examples', Controllers\ExampleController::class)->only([
    'index', 'show'
]);

Route::get('posts', [Controllers\PostController::class, 'index'])->name('posts.index');
Route::get('posts/{post}', [Controllers\PostController::class, 'show'])->name('posts.show');
