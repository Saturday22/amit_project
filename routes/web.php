<?php

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\pantsController;
use App\Http\Controllers\ShoesController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\tshirtController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $tShirts=Product::where('category','t shirt')->take(3)->get();
    $pants=Product::where('category','Pants')->take(3)->get();
    $shoes=Product::where('category','Shoes')->take(3)->get();
    return view('welcome',compact('tShirts','pants','shoes'));
});

Route::get('/profile', function () {
    return view('profile/profile');
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/Orders', function () {
    return view('Orders/Orders');
});

Route::post('/search', [SearchController::class, 'Search'])->name('Search');
Route::get('/addtocart/{id}', [CartController::class, 'addToCart'])->name('addToCart');
Route::get('/removeitem/{id}', [CartController::class, 'remove'])->name('remove');
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
// addToCart
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
 Route::resource('/pants', pantsController::class);
 Route::resource('/tshirt', tshirtController::class);
 Route::resource('/shoes', ShoesController::class);

 Route::middleware(['auth','isAdmin'])->resource('/Admin', AdminController::class);

