<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminsController;

Route::get('/', function () {
    return view('welcome');
});

// Location information
Route::get('currentUserInfo', [AdminsController::class, 'currentUserInfo']);

Auth::routes();
/*------------------------------------------
--------------------------------------------
All Normal Vendor Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [AdminsController::class, 'adminHome']);

    // Categories
    Route::get('categories', [AdminsController::class, 'categories']);
    Route::get('addCategory', [AdminsController::class, 'addCategory']);
    Route::post('add_Category', [AdminsController::class, 'add_Category']);
    Route::get('editCategories/{id}', [AdminsController::class, 'editCategories']);
    Route::get('extras/{id}', [AdminsController::class, 'extras']);
    Route::post('edit_Category/{id}', [AdminsController::class, 'edit_Category']);
    Route::get('deleteCategory/{id}', [AdminsController::class, 'deleteCategory']);

    //Products
    Route::get('products', [AdminsController::class, 'products']);
    Route::get('addProduct', [AdminsController::class, 'addProduct']);
    Route::post('add_Product', [AdminsController::class, 'add_Product']);
    Route::get('editCategories/{id}', [AdminsController::class, 'editCategories']);
    Route::post('edit_Product/{id}', [AdminsController::class, 'edit_Product']);
    Route::get('deleteProduct/{id}', [AdminsController::class, 'deleteProduct']);

    //Users
    Route::get('users', [AdminsController::class, 'users']);
    Route::get('addUser', [AdminsController::class, 'addUser']);
    Route::post('add_User', [AdminsController::class, 'add_User']);
    Route::get('editUser/{id}', [AdminsController::class, 'editUser']);
    Route::post('edit_User/{id}', [AdminsController::class, 'edit_User']);
    Route::get('deleteUser/{id}', [AdminsController::class, 'deleteUser']);




});

