<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
