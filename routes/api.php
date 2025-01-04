<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\User\StoreController;
use Illuminate\Support\Facades\Route;

// Группа маршрутов для аутентификации
Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
    Route::post('register', [StoreController::class, 'store']); // Регистрация
});

// Группа маршрутов для пользователей (если необходимо, добавьте другие действия)
Route::group(['prefix' => 'users'], function () {
    // Дополнительные маршруты для работы с пользователями можно добавить здесь
});

// Группа маршрутов для фруктов
Route::group(['prefix' => 'fruits'], function () {
    Route::get('/', [IndexController::class, 'index']);
});
