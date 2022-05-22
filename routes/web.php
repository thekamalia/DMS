<?php


use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DropshipController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DropshipperController;
use App\Http\Controllers\ProductListController;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
     ]);
});

Route::get('/about', function () {
    return view('about',[
        "name" => "kamalia",
        "email" => "kfk@gmail.com",
        "image" => "logo.png",
        "title" => "About"

    ]);
});

Route::get('/minishop', function () {
    return view('minishop',[
        "name" => "kamalia",
        "email" => "kfk@gmail.com",
        "image" => "logo.png",
        "title" => "About"

    ]);
});

Route::get('/login', [LoginController::class,'index']);
Route::post('login', [LoginController::class, 'authenticate']);
// Route::post('/login', [LoginController::class,'authenticate']);

Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'store']); // store = simpan

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Route::get('/dashboard', function(){
//     return view('dashboard.index');
// });


// Seller

// Route::get('/dashboard', function(){      //   /dashboard  -> cara panggil
//     return view('dashboard.index');
// }); // for seller
// Route::get('/dashboard1', function(){
//     return view('dashboard.index1');
// }); // for seller

Route::get('/dashboard', [DashboardController::class, 'index']);

// Route::resource('/dashboard/product', ProductController::class)->middleware('auth');
Route::resource('products', ProductController::class);

//Route for seller dropshipper dashboard
Route::resource('dropship', DropshipController::class); //{{ route('dropshipper.index') }} ---> untuk resources




// Dropshipper

Route::get('/dashboardds', function(){
    return view('dashboardds.index');
}); //for dropshipper

Route::get('/dashboardds1', function(){
    return view('dashboardds.index1');
}); //for dropshipper

// order for dropshipper dashboard
Route::resource('order', OrderController::class);

//shop for dropshipper dashboard
Route::resource('shops', ShopController::class);

//Route for dropshipper customer dashboard
Route::resource('customers', CustomerController::class);

//Route for dropshipper products dashboard
Route::get('/productlist', [ProductListController::class, 'index']);

//Route for dropshipper cart
//Route::get('/cart', 'CartController@index')->name('cart.index');
Route::get('/cart', [CartController::class, 'index']);
Route::get('/cart', [CartController::class, 'store']);


// Route::get('shops', [ShopController::class, 'index']);
// Route::get('/shops/{id}', [ShopController::class, 'show']);
// Route::get('add-shop', [ShopController::class, 'create']);
// Route::post('add-shop', [ShopController::class, 'store']);
// Route::get('edit-shop/{id}', [ShopController::class, 'edit']);
// Route::put('update-shop/{id}', [ShopController::class, 'update']);
// Route::delete('delete-shop/{id}', [ShopController::class, 'destroy']);








