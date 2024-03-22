<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GallaryImgController;
use App\Http\Controllers\PromoVideoController;
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
Route::get('/',[HomeController::class,'index']);
Route::get('/privacy-policy',[HomeController::class,'privacy_policy'])->name('privacy_policy');;
Route::get('/admin',[HomeController::class,'admin'])->middleware(['auth']);

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/about', function () {
    return view('about');
});
Route::get('/pay',[PaymentController::class,'index']);
Route::get('/campaigns', function () {
    return view('campaigns');
});
Route::get('/donate', function () {
    return view('donate');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::resource('/posts', PostController::class)->middleware(['auth']);
Route::resource('/gallary-img', GallaryImgController::class)->middleware(['auth']);
Route::resource('/promo-vid', PromoVideoController::class)->middleware(['auth']);

Route::get('post/{tag_id}',[PostController::class,'tag_posts'])->name('tags.posts');

Route::resource('tags', TagController::class)->middleware(['auth']);

Route::get('/a', function () {
    return view('a');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
