<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
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
    return view('login');
});

Route::get('/dashboard-admin', function () {
    return view('role.admin.PageDashboardAdmin');
})->name('dashboardAdmin');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::post('/store', [ProductController::class, 'store'])->name('product-store');
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product-edit');
Route::put('/update', [ProductController::class, 'update'])->name('product-update');
Route::post('/destroy/{id}', [ProductController::class, 'destroy'])->name('product-destroy');
Route::get('/import', [ProductController::class, 'import'])->name('product-import');
Route::get('/export', [ProductController::class, 'export'])->name('product-export');

Route::get('/show/{id}', [\App\Http\Livewire\Modal\DetailProduk::class, 'showProduct'])->name('show-product');
Route::get('/edit/{id}', [\App\Http\Livewire\Modal\EditProduk::class, 'editProduct'])->name('edit-product');
Route::get('/delete/{id}', [\App\Http\Livewire\Modal\HapusProduk::class, 'deleteProduct'])->name('delete-product');


Route::get('/lihat/{id}', [\App\Http\Livewire\Modal\DetailProduk::class,'mount'])->name('lihat-produk');