<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
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
    return view('front');
});
Route::get('/admin', function () {
    return view('admin');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/menu', [MenuController::class, 'menu']);
Route::get('/book', [BookController::class, 'book']);
Route::get('/chefs', [BookController::class, 'chefs']);;
Route::get('/about', [AboutController::class, 'about']);
Route::get('/events', [EventsController::class, 'events']);
Route::get('/order', [OrderController::class, 'order']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
