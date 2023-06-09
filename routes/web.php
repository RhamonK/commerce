<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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
    $products = Product::inRandomOrder()->take(4)->get();
    $categories = Category::take(3)->get();
    return view('welcome', ["products" => $products, 'categories' => $categories]);
})->name('welcome');

Route::get('/blog', [PostController::class, 'index'])->name('blog');

Route::get('/singleblog/{post}', [PostController::class, 'show'])->name('singleblog');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('checkout', [CheckoutController::class, 'create'])
    ->name('checkout.create');
Route::post('paymentIntent', [CheckoutController::class, 'paymentIntent'])
    ->name('checkout.paymentIntent');
Route::resource('products', ProductController::class);

Route::resource('posts', PostController::class);

Route::get('shoppingCart', [CartController::class, 'index'])
    ->name('cart.index');

Route::resource('orders', OrderController::class);

Route::get('/clear', function () {
    \Cart::session(auth()->user()->id)->clear();
});

Route::get('/dashboard', function () {
    $orders = auth()->user()->orders;
    return view('dashboard', compact('orders'));
})->middleware(['auth'])->name('dashboard');

Route::get('/thankyou', fn() => 'Merci de votre commande!');

require __DIR__.'/auth.php';
