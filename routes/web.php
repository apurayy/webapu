<?php

use App\Http\Controllers\FrontedController;
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

Route::get('/',[FrontedController::class, 'home'])->name('home');

Route::get('/about-us',[FrontedController::class, 'about'])->name('about');

Route::get('/services-us',[FrontedController::class, 'service'])->name('service');

Route::get('/contact-us', [FrontedController::class, 'contact'])->name('contact');
