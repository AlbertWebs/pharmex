<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\ShopController;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('stock-exchange')->group(function () {
    Route::get('/', [ShopController::class, 'index'])->name('home');
    Route::get('/shop-by-category/{category-slung}', [ShopController::class, 'index'])->name('category');
    Route::get('/get-single-product/{slung}', [ShopController::class, 'product'])->name('product');

    //Shopping cart
    Route::post('/add-to-cart', [ShopController::class, 'add'])->name('add-to-cart');
    Route::get('/shopping-cart', [ShopController::class, 'cart'])->name('shopping-cart');
    Route::get('/shopping-cart/checkout', [ShopController::class, 'checkout'])->name('checkout');

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
        Route::post('add_Category', [AdminsController::class, 'add_Category'])->name('add-category-post');
        Route::get('editCategories/{id}', [AdminsController::class, 'editCategories']);
        Route::post('edit_Category/{id}', [AdminsController::class, 'edit_Category']);
        Route::get('deleteCategory/{id}', [AdminsController::class, 'deleteCategory']);

        // brands
        Route::get('brands', [AdminsController::class, 'brands'])->name('all-brand');
        Route::get('addbrand', [AdminsController::class, 'addbrand'])->name('add-brand');
        Route::post('add_brand', [AdminsController::class, 'add_brand'])->name('add-brand-post');
        Route::get('editBrands/{id}', [AdminsController::class, 'editbrands']);
        Route::post('edit_brand/{id}', [AdminsController::class, 'edit_brand']);
        Route::get('deletebrand/{id}', [AdminsController::class, 'deletebrand']);

        //Products
        Route::get('products', [AdminsController::class, 'products'])->name('products');
        Route::get('addProduct', [AdminsController::class, 'addProduct'])->name('addProduct');
        Route::post('add_Product', [AdminsController::class, 'add_Product']);
        Route::get('editProduct/{id}', [AdminsController::class, 'editProduct']);
        Route::post('edit_Product/{id}', [AdminsController::class, 'edit_Product']);
        Route::get('deleteProduct/{id}', [AdminsController::class, 'deleteProduct']);

        //logos
        Route::get('logos', [AdminsController::class, 'logos'])->name('logos');
        Route::get('addLogo', [AdminsController::class, 'addLogo'])->name('add-new-logo');
        Route::post('add_Logo', [AdminsController::class, 'add_Logo'])->name('add-client-post');
        Route::get('editLogos/{id}', [AdminsController::class, 'editLogos']);
        Route::post('edit_Logo/{id}', [AdminsController::class, 'edit_Logo']);
        Route::get('deleteLogo/{id}', [AdminsController::class, 'deleteLogo']);

         //Orders
         Route::get('orders', [AdminsController::class, 'orders'])->name('orders');
         Route::get('vendors', [AdminsController::class, 'vendors'])->name('vendors');
         Route::get('video', [AdminsController::class, 'video'])->name('video');
         Route::post('update-embeded-video', [AdminsController::class, 'update_embeded'])->name('update-embeded-video');


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

