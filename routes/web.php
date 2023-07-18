<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use GuzzleHttp\Promise\Create;
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

Route::get('/', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

Route::get('/dashboard', [ProductController::class, 'index'])->name('dashboard');

Route::get('/produtos/create', [ProductController::class, 'create'])->name('produtos.create');
Route::post('/produtos/store', [ProductController::class, 'store'])->name('produtos.store');
Route::post('/produtos/{id}/update', [ProductController::class, 'update'])->name('produtos.update');
Route::get('/produtos/edit/{id}', [ProductController::class, 'edit'])->name('produtos.edit');
Route::delete('/produtos/{id}/delete', [ProductController::class, 'destroy'])->name('produtos.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
