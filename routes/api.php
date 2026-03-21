<?php
///ставим присиставку api/,когда делаем запрос пример http://127.0.0.1:8000/api/photos

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\Post\IndexController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MyPostController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PhotoController;
use App\Http\Middleware\AdminPanelMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/photos', [PhotoController::class, 'index']);
Route::post('/photos', [PhotoController::class, 'store']);
Route::get('/photos/{photo}', [PhotoController::class, 'show']);;
Route::delete('/photos/{photo}', [PhotoController::class, 'destroy']);
Route::put('/photos/{photo}', [PhotoController::class, 'update']);

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login',[AuthController::class,'login'] );
    Route::post('logout', [AuthController::class,'logout']);
    Route::post('refresh', [AuthController::class,'refresh']);
    Route::post('me', [AuthController::class,'me']);

});
