<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('autocomplete', [SearchController::class, 'autocomplete'])->name('autocomplete');
Route::get('autocompletes', [SearchController::class, 'autocompletes'])->name('autocompletes');
Route::get('autocompletez', [SearchController::class, 'autocompletez'])->name('autocompletez');




Route::get('users', [ProductController::class, 'index']);
Route::get('users-export', [ProductController::class, 'export'])->name('users.export');
Route::post('users-import', [ProductController::class, 'import'])->name('users.import');

Route::prefix('stock-exchange')->group(function () {
    Route::get('/', [AdminsController::class, 'index'])->name('home');
    Route::get('/shop-by-category/{category-slung}', [ShopController::class, 'index'])->name('category');
    Route::get('/get-single-product/{slung}', [ShopController::class, 'product'])->name('product');

    //Shopping cart
    Route::post('/add-to-cart', [ShopController::class, 'add'])->name('add-to-cart');
    Route::post('/add-to-cart-admin', [ShopController::class, 'addAdmin'])->name('add-to-cart-admin');

    Route::get('/shopping-cart', [ShopController::class, 'cart'])->name('shopping-cart');
    Route::get('/shopping-cart/checkout', [ShopController::class, 'checkout'])->name('checkout');
    Route::get('/checkout-admin', [ShopController::class, 'checkout_admin'])->name('checkout-admin');

    Route::get('/shopping-cart/destroy', [ShopController::class, 'destroy'])->name('destroy');
    Route::post('/shopping-cart/select-login', [ShopController::class, 'select'])->name('select-login');
    Route::get('/shopping-cart/destroys/{RoWId}', [ShopController::class, 'destroys'])->name('destroys');
});

// Location information
Route::get('currentUserInfo', [AdminsController::class, 'currentUserInfo']);

Auth::routes();
/*------------------------------------------
--------------------------------------------
All Normal Vendor Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
    Route::prefix('merchant-panel')->group(function () {
        Route::get('/', [MerchantController::class, 'index'])->name('manager.home');
    });
});
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
// Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::prefix('admin-panel')->group(function () {

        Route::get('/', [AdminsController::class, 'index'])->name('admin.home');
        Route::get('/mysettings', [AdminsController::class, 'mysettings'])->name('mysettings');


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

         // dosages
         Route::get('dosages', [AdminsController::class, 'dosages'])->name('dosage');
         Route::get('adddosage', [AdminsController::class, 'adddosage'])->name('add-dosage');
         Route::post('add_dosage', [AdminsController::class, 'add_dosage'])->name('add-dosage-post');
         Route::get('editdosages/{id}', [AdminsController::class, 'editdosages']);
         Route::post('edit_dosage/{id}', [AdminsController::class, 'edit_dosage']);
         Route::get('deletedosage/{id}', [AdminsController::class, 'deletedosage']);

        // strengths
        Route::get('strengths', [AdminsController::class, 'strengths'])->name('strength');
        Route::get('addstrength', [AdminsController::class, 'addstrength'])->name('add-strength');
        Route::post('add_strength', [AdminsController::class, 'add_strength'])->name('add-strength-post');
        Route::get('editstrengths/{id}', [AdminsController::class, 'editstrengths']);
        Route::post('edit_strength/{id}', [AdminsController::class, 'edit_strength']);
        Route::get('deletestrength/{id}', [AdminsController::class, 'deletestrength']);

        //Products
        Route::get('products', [AdminsController::class, 'products'])->name('products');
        Route::get('addProduct', [AdminsController::class, 'addProduct'])->name('addProduct');
        Route::post('add_Product', [AdminsController::class, 'add_Product']);
        Route::get('editProduct/{id}', [AdminsController::class, 'editProduct']);
        Route::post('edit_Product/{id}', [AdminsController::class, 'edit_Product']);
        Route::get('deleteProduct/{id}', [AdminsController::class, 'deleteProduct']);
        Route::get('all-products', [AdminsController::class, 'products_all'])->name('all-products');


        Route::get('update-image', [AdminsController::class, 'updateProductImage'])->name('updateProductImage');
        Route::get('update-slung', [AdminsController::class, 'updateProductSlung'])->name('updateProductSlung');
        Route::get('update-price', [AdminsController::class, 'updateProductPrice'])->name('updateProductPrice');
        Route::get('update-qty', [AdminsController::class, 'updateProductQuantity'])->name('updateProductQuantity');

        // Reports
        Route::get('exchange-reports', [AdminsController::class, 'exchange_reports'])->name('exchange-reports');
        Route::get('order-fulfilment-reports', [AdminsController::class, 'fulfilment'])->name('order-fulfilment-reports');

        Route::get('add_expired', [AdminsController::class, 'add_expired'])->name('add_expired');

        Route::post('add_expired', [AdminsController::class, 'add_expired_post'])->name('add_expired_post');



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
         Route::get('listed-products', [AdminsController::class, 'listed_products'])->name('listed-products');



        //Users
        Route::get('users', [AdminsController::class, 'users']);
        Route::get('addUser', [AdminsController::class, 'addUser']);
        Route::post('add_User', [AdminsController::class, 'add_User']);
        Route::get('editUser/{id}', [AdminsController::class, 'editUser']);
        Route::post('edit_User/{id}', [AdminsController::class, 'edit_User']);
        Route::get('deleteUser/{id}', [AdminsController::class, 'deleteUser']);

        Route::get('company-details/{is}', [AdminsController::class, 'company_details'])->name('company-details');

        Route::get('order-process-accept/{id}', [AdminsController::class, 'order_process_accept'])->name('order-process-accept');
        Route::get('order-process-reject/{id}', [AdminsController::class, 'order_process_reject'])->name('order-process-reject');

        Route::post('accept-order', [AdminsController::class, 'accept_order'])->name('accept-order');




        Route::post('changestatustask', [AdminsController::class, 'statusTask'])->name('statusTask');

        Route::get('place-order', [AdminsController::class, 'place_order'])->name('place-order');

        Route::get('all-orders-listings', [AdminsController::class, 'all_orders'])->name('all-orders');





        Route::get('/thankYou', [UserController::class, 'thankYou'])->name('thankYou');

        Route::post('/make-stk-request', [App\Http\Controllers\KcbController::class, 'stkRequestMake'])->name('make-stk-request');

        //
    });

// });

