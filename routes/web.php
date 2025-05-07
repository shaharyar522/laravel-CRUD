<?php

use App\Http\Controllers\FomrController;
use App\Http\Controllers\FormController;
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
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentInfoController;
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


//Route
Route::get('/form/create',[FormController::class,'create']);
Route::post('/form/store',[FormController::class,'store'])->name('store.form');

Route::get('/form/index',[FormController::class,'index'])->name('form.index');
Route::get('/form/edit/{id}',[FormController::class,'edit'])->name('form.edit');
Route::post('/form/update/{id}',[FormController::class,'update'])->name('form.update');



//student ka leuey hian 

Route::get('/student/create',[StudentController::class,'create']);
Route::post('/student/store',[StudentController::class,'store'])->name('store_stuend_data');

//data ko ohtyahian 
Route::get('/student/index',[StudentController::class,'index'])->name('student.index');
Route::get('/student/edit/{id}',[StudentController::class,'edit'])->name('student.edit');
Route::post('/student/update/{id}',[StudentController::class,'update'])->name('student.update');

























Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
