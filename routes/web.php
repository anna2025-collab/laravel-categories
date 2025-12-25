<?php


use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MyPostController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'home';
});

Route::get('/posts', [MyPostController::class, 'index'])->name('post.index');
Route::get('/posts/create', [MyPostController::class, 'create'])->name('post.create');
Route::post('/posts', [MyPostController::class, 'store'])->name('post.store');
Route::get('/posts/{post}', [MyPostController::class, 'show'])->name('post.show');
Route::get('/posts/{post}/edit', [MyPostController::class, 'edit'])->name('post.edit');
Route::patch('/posts/{post}', [MyPostController::class, 'update'])->name('post.update');
Route::delete('/posts/{post}', [MyPostController::class, 'destroy'])->name('post.delete');


Route::get('/photos', [PhotoController::class, 'index'])->name('photo.index');
Route::get('/photos/create', [PhotoController::class, 'create'])->name('photo.create');
Route::post('/photos', [PhotoController::class, 'store'])->name('photo.store');
Route::get('/photos/{photo}', [PhotoController::class, 'show'])->name('photo.show');
Route::get('/photos/{photo}/edit', [PhotoController::class, 'edit'])->name('photo.edit');
Route::delete('/photos/{photo}', [PhotoController::class, 'destroy'])->name('photo.destroy');
Route::put('/photos/{photo}', [PhotoController::class, 'update'])->name('photo.update');
// Лайки — ВСЕГДА самые первые
Route::post('/news/{news}/like', [NewsController::class, 'like'])->name('news.like');
Route::post('/news/{news}/dislike', [NewsController::class, 'dislike'])->name('news.dislike');

// CRUD
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('/news', [NewsController::class, 'store'])->name('news.store');

// ВАЖНО! Эти маршруты — всегда ПОСЛЕ лайков
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');
Route::get('/news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
Route::put('/news/{news}', [NewsController::class, 'update'])->name('news.update');
Route::delete('/news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{categories}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/categories/{categories}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{categories}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{categories}', [CategoryController::class, 'destroy'])->name('categories.destroy');














Route::get('/posts/update', [MyPostController::class, 'updatingstring']);
Route::get('/posts/delete', [MyPostController::class, 'delete']);
Route::get('/posts/first_or_create', [MyPostController::class, 'firstOrCreate']);
Route::get('/posts/update_or_create', [MyPostController::class, 'updateOrCreate']);

Route::get('/main', [MainController::class, 'main'])->name('main.index');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact.index');
Route::get('/about', [AboutController::class, 'about'])->name('about.index');

