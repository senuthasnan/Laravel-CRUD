<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

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

Route::get('/', [ProdukController::class, 'index'])->name('index');

Route::get('/create', [ProdukController::class, 'create'])->name('create');
Route::post('/create', [ProdukController::class, 'create_post'])->name('create.post');

Route::get('/{produk}/edit', [ProdukController::class, 'edit'])->name('edit');
Route::post('/{produk}/edit', [ProdukController::class, 'update'])->name('update');

Route::post('/{produk}/delete', [ProdukController::class, 'delete'])->name('delete');