<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\FoodController; 
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SubcategoryController; 
use App\Http\Controllers\SslCommerzPaymentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('front');
});
// Route::resource('/',FrontController::class);


Route::get('/admin', function () {
    return view('admin');
});
// Route::get('/role', function () {
//     return view('admin.role.index');
// });
// Route::resource('role',RoleController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

route::prefix('front')->group(function(){
    route::resource('booking',BookingController::class); 
    route::resource('checkout',CheckoutController::class);
});


Route::get('/menu', [MenuController::class, 'menu']);
// Route::get('/booking-table', [BookingController::class,'index']);
Route::get('/chefs', [BookController::class, 'chefs']);
// Route::get('/cart', [BookController::class, 'cart']);
// Route::post('/checkout', [BookController::class, 'checkout']);

Route::get('/invoice', [BookController::class, 'invoice']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/events', [EventsController::class, 'events']);
// Route::get('/order', [OrderController::class, 'order']);
Route::resources([
    'order' => OrderController::class,
]);
// add to cart
Route::post('/add-to-cart', [CartController::class, 'add_to_cart']);
Route::get('/delete-cart/{id}', [CartController::class, 'delete']);

// Admin panale ar kaz
route::prefix('admin')->group(function(){
        Route::resource('roles',RoleController::class);
        Route::resource('categorys', CategoryController::class);
        Route::resource('subcategorys',SubcategoryController::class);
        Route::resource('foods',FoodController::class);
});

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
