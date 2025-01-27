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
    Route::prefix('admin-panel')->group(function () {

        Route::get('/', [AdminsController::class, 'index'])->name('admin.home');

        // Categories
        Route::get('categories', [AdminsController::class, 'categories'])->name('all-category');
        Route::get('addCategory', [AdminsController::class, 'addCategory'])->name('add-category');
        Route::post('add_Category', [AdminsController::class, 'add_Category']);
        Route::get('editCategories/{id}', [AdminsController::class, 'editCategories']);
        Route::post('edit_Category/{id}', [AdminsController::class, 'edit_Category']);
        Route::get('deleteCategory/{id}', [AdminsController::class, 'deleteCategory']);

        // brands
        Route::get('brands', [AdminsController::class, 'brands'])->name('all-brand');
        Route::get('addbrand', [AdminsController::class, 'addbrand'])->name('add-brand');
        Route::post('add_brand', [AdminsController::class, 'add_brand']);
        Route::get('editbrands/{id}', [AdminsController::class, 'editbrands']);
        Route::post('edit_brand/{id}', [AdminsController::class, 'edit_brand']);
        Route::get('deletebrand/{id}', [AdminsController::class, 'deletebrand']);

        //Products
        Route::get('products', [AdminsController::class, 'products'])->name('products');
        Route::get('addProduct', [AdminsController::class, 'addProduct'])->name('addProduct');
        Route::post('add_Product', [AdminsController::class, 'add_Product']);
        Route::get('editCategories/{id}', [AdminsController::class, 'editCategories']);
        Route::post('edit_Product/{id}', [AdminsController::class, 'edit_Product']);
        Route::get('deleteProduct/{id}', [AdminsController::class, 'deleteProduct']);

         //Orders
         Route::get('orders', [AdminsController::class, 'orders'])->name('orders');
         Route::get('vendors', [AdminsController::class, 'vendors'])->name('vendors');

         Route::get('orders', [AdminsController::class, 'orders'])->name('orders');

        //Users
        Route::get('users', [AdminsController::class, 'users']);
        Route::get('addUser', [AdminsController::class, 'addUser']);
        Route::post('add_User', [AdminsController::class, 'add_User']);
        Route::get('editUser/{id}', [AdminsController::class, 'editUser']);
        Route::post('edit_User/{id}', [AdminsController::class, 'edit_User']);
        Route::get('deleteUser/{id}', [AdminsController::class, 'deleteUser']);

        //
    });

});

