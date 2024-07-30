<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth','role:admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

});

Route::middleware('auth')->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('user.dashboard');
});




Route::get('/aboutus',[PageController::class,'aboutus'])->name('aboutus');
Route::get('/contactus',[PageController::class,'contactus'])->name('contactus');
Route::get('/products',[PageController::class,'products'])->name('products');
Route::get('/brands',[PageController::class,'brands'])->name('brands');

Route::get('/category',[PageController::class,'category'])->name('category');

Route::get('/login',[PageController::class,'login'])->name('login');
Route::get('/register',[PageController::class,'register'])->name('register');
Route::get('/services',[PageController::class,'services'])->name('services');

require __DIR__.'/auth.php';
