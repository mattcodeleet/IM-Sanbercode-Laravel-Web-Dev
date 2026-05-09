<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;


Route::get('/', [DashboardController::class, 'intro'])->name('home')->middleware('auth');
//Route::get('/register', [FormController::class, 'signup']);
//Route::post('/welcome', [FormController::class, 'beranda'])->middleware('auth');
Route::get('/profile', [ProfileController::class, 'getProfile'])->middleware('auth');
Route::put('/profile', [ProfileController::class, 'update'])->middleware('auth');
Route::post('/profile', [ProfileController::class, 'store'])->middleware('auth');

Route::middleware(['auth', 'admin'])->group(function () {
        //CRUD categories
        //Create Data
        Route::get('/category/create',[CategoriesController::class, 'create']);
        Route::post('/category',[CategoriesController::class, 'store']);

        //Read Data
        Route::get('/category',[CategoriesController::class, 'index']);
        Route::get('/category/{id}',[CategoriesController::class, 'show']);

        //Update Data
        Route::get('/category/{id}/edit',[CategoriesController::class, 'edit']);
        Route::put('/category/{id}',[CategoriesController::class, 'update']);

        //Delete Data
        Route::delete('/category/{id}',[CategoriesController::class, 'destroy']);
});

    //CRUD Product
    Route::resource('/product', ProductController::class); 
    Route::middleware(['guest'])->group(function () {
    
    //AuthRegister
    Route::get('/register', [AuthController::class, 'formregister']);
    Route::post('/register', [AuthController::class, 'register']);

    //login
    Route::get('/login', [AuthController::class, 'formlogin']);
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

//logout
Route::post('/logout', [AuthController::class, 'logout']);

