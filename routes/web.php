<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TestimonialController;
// use App\Http\Controllers\Admin\ConversatioController;
use App\Http\Controllers\Admin\UserController;
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

Route::prefix('admin')->group(function(){

    // Route::resource('conversation',ConversatioController::class)->middleware('verified');
    Route::resource('blog',BlogController::class);
    Route::resource('gallery',GalleryController::class);
    Route::resource('message',MessageController::class)->only(['index','destroy']);
    Route::post('message/read/{message}',[MessageController::class,'read'])->name('message.read');
    Route::resource('service',ServiceController::class);
    Route::resource('testimonial',TestimonialController::class);
    Route::resource('user',UserController::class);
});

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
