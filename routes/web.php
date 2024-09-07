<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('index',[PublicController::class,'index'])->name('index');
Route::get('about',[PublicController::class,'about'])->name('about');
Route::get('blog',[PublicController::class,'blog'])->name('blog');
Route::get('blogDetails/{id}',[PublicController::class,'blogDetails'])->name('blogDetails');
Route::get('gallery',[PublicController::class,'gallery'])->name('gallery');
Route::get('service',[PublicController::class,'service'])->name('service');
Route::get('serviceDetails/{id}',[PublicController::class,'serviceDetails'])->name('serviceDetails');
Route::get('contact',[PublicController::class,'contact'])->name('contact');
Route::post('contact',[PublicController::class,'contactpost'])->name('contactpost');
Route::post('newsletter',[PublicController::class,'newsletter'])->name('newsletter');
