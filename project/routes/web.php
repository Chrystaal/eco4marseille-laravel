<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\AfterlifeController;
use App\Http\Controllers\AssemblyController;
use App\Http\Controllers\DistributionController;
use App\Http\Controllers\LifespanController;
use App\Http\Controllers\Product_useController;
use App\Http\Controllers\Raw_materialController;
use App\Http\Controllers\Sub_assemblyController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/form', 'form');

Route::resource('product', ProductController::class);
Route::resource('afterlife', AfterlifeController::class);
Route::resource('assembly', AssemblyController::class);
Route::resource('distribution', DistributionController::class);
Route::resource('lifespan', LifespanController::class);
Route::resource('product_use', Product_useController::class);
Route::resource('raw_material', Raw_materialController::class);
Route::resource('sub_assembly', Sub_assemblyController::class);
Route::resource('user', UserController::class);

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::post('afterlife', [AfterlifeController::class, 'store_afterlife'])->name('afterlife.post');
Route::post('assembly', [AssemblyController::class, 'store_assembly'])->name('assembly.post');
Route::post('distribution', [DistributionController::class, 'store_distribution'])->name('distribution.post');
Route::post('lifespan', [LifespanController::class, 'store_lifespan'])->name('lifespan.post');
Route::post('product_use', [Product_useController::class, 'store_product_use'])->name('product_use.post');
Route::post('raw_material', [Raw_materialController::class, 'store_raw_material'])->name('raw_material.post');
Route::post('sub_assembly', [Sub_assemblyController::class, 'store_sub_assembly'])->name('sub_assembly.post');
