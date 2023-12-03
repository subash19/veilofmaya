<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;



Route::get('/', [ApplicationController::class, 'index'])->name('index');
Route::get('/home', [ApplicationController::class, 'home'])->name('home');
Route::get('/about', [ApplicationController::class, 'about'])->name('about');
Route::get('/contact', [ApplicationController::class, 'contact'])->name('contact');
Route::post('/contact', [ApplicationController::class, 'contactAction'])->name('contactAction');

?>

