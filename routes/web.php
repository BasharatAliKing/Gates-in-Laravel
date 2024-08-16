<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register',[UserController::class,'register']);
Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/loginMatch',[UserController::class,'loginmatch'])->name('loginmatch');
Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard')->middleware('can:isAdmin');
Route::get('/logout',[UserController::class,'logout'])->name('logout');
Route::get('/profile/{id}',[UserController::class,'profile'])->name('profile');
Route::get('/post/{id}',[UserController::class,'post'])->name('post');
Route::get('/update-post/{id}',[UserController::class,'updatepost'])->name('updatepost');