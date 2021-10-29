<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ResumeController;
use App\Models\Category;

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

Route::redirect('/', '/inventory');
Route::get('/login', function () {return view('login');})->name('login-page');
Route::post('/login',[AuthController::class, 'login'])->name('login');
Route::post('/logout',[AuthController::class, 'logout'])->name('logout');

Route::get('/inventory',[InventoryController::class, 'index'])->name('inventory.index');
Route::get('/resumes',[ResumeController::class, 'index'])->name('resume');

Route::middleware(['auth.user'])->group(function () {
    Route::get('/user',[UserController::class, 'index'])->name('user.index');
    Route::get('/user/create', function() {return view('pages.user-create');})->name('user.create');
    Route::post('/user', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/{id}',[UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/{id}',[UserController::class, 'update'])->name('user.update');

    Route::get('/inventory/create', function() {$categories = Category::get();  return view('pages.inventory-create', compact('categories'));})->name('inventory.create');
    Route::post('/inventory', [InventoryController::class, 'store'])->name('inventory.store');
    Route::get('/inventory/{id}',[InventoryController::class, 'edit'])->name('inventory.edit');
    Route::put('/inventory/{id}',[InventoryController::class, 'update'])->name('inventory.update');
});
Route::middleware(['auth.user', 'auth.admin'])->group(function () {
    Route::delete('/user/{id}',[UserController::class, 'destroy'])->name('user.destroy');
    Route::delete('/inventory/{id}',[InventoryController::class, 'destroy'])->name('inventory.destroy');
});
