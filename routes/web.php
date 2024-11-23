<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;
// Route::get('/',function(){
//     return view('web');
// });

Route::get('/',[AppController::class,'index'])->name('index');
Route::get('/blogs',[AppController::class,'blogs'])->name('blogs');
Route::get('/blog/{id}',[AppController::class,'blog'])->name('blog');
Route::get('/about-us',[AppController::class,'about'])->name('about');
Route::get('/contact-us',[AppController::class,'contact'])->name('contact');
Route::get('/team',[AppController::class,'team'])->name('team');
Route::get('/services',[AppController::class,'services'])->name('services');


