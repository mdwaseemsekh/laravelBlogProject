<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
// Route::get('/',function(){
//     return view('web');
// });

Route::get('/',[AppController::class,'index'])->name('index');
Route::get('/blogs',[AppController::class,'blogs'])->name('blogs');
Route::post('/blogs',[AppController::class,'search_blog'])->name('search_blog');
Route::get('/blog/{slug}',[AppController::class,'blog'])->name('blog');
Route::get('/about-us',[AppController::class,'about'])->name('about');
Route::get('/contact-us',[AppController::class,'contact'])->name('contact');
Route::get('/team',[AppController::class,'team'])->name('team');
Route::get('/services',[AppController::class,'services'])->name('services');
Route::post('/contact-us',[AppController::class,'queries'])->name('queries');



Route::prefix('admin')->group(function () {
    // Admin login routes
    Route::get('login', [AdminController::class, 'login'])->name('login');
    Route::post('/login', [AdminController::class, 'check'])->name('admin.check');

    // Protected routes for authenticated admin
    Route::middleware('auth:admin')->group(function () {
        Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        
        // Blog management routes
        Route::get('/add-blog', [BlogController::class, 'add_blog'])->name('add_blog');
        Route::post('/save', [BlogController::class, 'save'])->name('blog.save');
        Route::get('/update-blog/{slug}', [BlogController::class, 'edit'])->name('blog.edit');
        Route::post('/update-blog/{slug}', [BlogController::class, 'update'])->name('blog.update');
        Route::delete('/delete-blog', [BlogController::class, 'delete'])->name('blog.delete');
    });
});

