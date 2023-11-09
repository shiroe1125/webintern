<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\home;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\CategoryProductController;
use App\Models\Category;
use App\Models\Product;
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

Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('/login',[LoginController::class, 'index']);
Route::post('/login',[LoginController::class, 'store'])->name('login');

Route::get('/register',[RegisterController::class, 'index']);
Route::post('/register',[RegisterController::class, 'store'])->name('register');



Route::get('/detail/{id}',[HomeController::class, 'show'])->name('detail');

Route::get('/admin/category', [ProductController::class, 'index']) ->name('admin.products');
Route::get('/category/{category}', [CategoryProductController::class,'index'])->name('category.products');



Route::get('admin', function () {
    return view('admin.admin_home');
}) ->name('admin');

Route::get('/admin/home', [Home::class, 'index']) ->name('admin.home');

Route::get('/admin/products', [ProductController::class, 'index']) ->name('admin.products');
Route::get('/admin/products/add', [ProductController::class, 'create']) ->name('admin.products.create');
Route::post('/admin/products/add', [ProductController::class, 'store']) ->name('admin.products.add');
Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit']) ->name('admin.products.edit');
Route::put('/admin/products/edit/{id}', [ProductController::class, 'update']) ->name('admin.products.update');
Route::delete('admin/products/delete/{id}', [ProductController::class, 'destroy']);

Route::get('/admin/category', [CategoryController::class, 'index']) ->name('admin.category');
Route::get('/admin/category/add', [CategoryController::class, 'create']) ->name('admin.category.create');
Route::post('/admin/category/add', [CategoryController::class, 'store']) ->name('admin.category.add');
Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit']) ->name('admin.category.edit');
Route::put('/admin/category/edit/{id}', [CategoryController::class, 'update']) ->name('admin.category.update');
Route::delete('admin/category/delete/{id}', [CategoryController::class, 'destroy']);

