<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

use App\Http\Controllers\ProductController;
use App\Http\Controllers\User_DataController;
use App\Http\Controllers\ServicesController;

use App\Http\Controllers\UserController;

Route::get('/product/create', [ProductController::class, 'create']);
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');


//route servies
Route::get('/customer/service/create',[ServicesController::class, 'create']);
Route::post('/customer/service/store', [ServicesController::class, 'store'])->name('service.store');
//route services sotre in database

//route user form
Route::get('/users/services/create',[UserController::class, 'create']);
Route::post('users/services/store',[UserController::class,'store'])->name('user.store');


Route::get('/user_data/create',[User_DataController::class, 'create']);
Route::get('/user/sotre',[User_DataController::class,'store'])->name('user_data.store');












Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
