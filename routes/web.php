<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\home;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\User\HomeController;
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

Route::get('/detail/{id}',[HomeController::class, 'show'])->name('detail');




Route::get('/admin/products', [ProductController::class, 'index']) ->name('admin.products');

Route::get('admin', function () {
    return view('admin.admin_home');
}) ->name('admin');

Route::get('/admin/home', [home::class, 'index']) ->name('admin.home');

Route::get('/admin/products', [ProductController::class, 'index']) ->name('admin.products');
Route::get('/admin/products/add', [ProductController::class, 'create']) ->name('admin.products.create');
Route::post('/admin/products/add', [ProductController::class, 'store']) ->name('admin.products.add');
Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit']) ->name('admin.products.edit');
Route::put('/admin/products/edit/{id}', [ProductController::class, 'update']) ->name('admin.products.update');
Route::delete('admin/products/delete/{id}', [ProductController::class, 'destroy']);

Route::get('/admin/category', [CategoryController::class, 'index']) ->name('admin.category');