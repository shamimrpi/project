<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Website\HomeController;


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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/cart',[HomeController::class,'cartView'])->name('cart');
Route::get('/checkout',[HomeController::class,'checkOut'])->name('check.out');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');


//admin area  

	Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
  	Route::get('/table', [DashboardController::class, 'table'])->name('table');
	Route::get('/form', [DashboardController::class, 'form'])->name('form');

	// category controller
	Route::get('/category',[CategoryController::class,'index'])->name('category');
	Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
	Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
	Route::post('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
	Route::get('/category/active/{id}',[CategoryController::class,'active'])->name('category.active');
	Route::delete('/category/delete/{id}',[CategoryController::class,'destroy'])->name('category.delete');


	//Product Controller
	Route::resource('/product',ProductController::class);
	








