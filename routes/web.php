<?php

use App\Http\Controllers\ViewsController;
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

Route::get('/', [ViewsController::class, 'home'])->name('home');
Route::get('/about', [ViewsController::class, 'about'])->name('about');
Route::get('/services', [ViewsController::class, 'services'])->name('services');
Route::get('/contact', [ViewsController::class, 'contact'])->name('contact');
