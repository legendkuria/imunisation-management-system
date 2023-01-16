<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\verification;

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
Route::post('ser', 'App\Http\Controllers\verification@log');
Auth::routes();
Route::resource('students','App\Http\Controllers\studentController');
Route::resource('Admin','App\Http\Controllers\AdminController');
Route::resource('parent1','App\Http\Controllers\parent1Controller');
Route::resource('viewchild','App\Http\Controllers\viewchildController');
Route::resource('adminview','App\Http\Controllers\adminviewController');
Route::resource('adminvaccine','App\Http\Controllers\adminvaccineController');
Route::resource('newvaccine','App\Http\Controllers\newvaccineController');
Route::resource('auth','App\Http\Controllers\authController');

Route::resource('report','App\Http\Controllers\reportController');
Route::resource('edit','App\Http\Controllers\editController');
Route::post('/send',[App\Http\Controllers\ContactController::class,'send'])->name('send.email');
Route::post('tabledit/show',['App\Http\Controllers\adminvaccineController::class'], 'show')->name('tabledit.show');
Route::resource('home', 'App\Http\Controllers\HomeController');
Auth::routes();
// Route::post('registerUser', [App\Http\Controllers\restoreController::class, 'registerUser']);
 Route::post('registerUser','App\Http\Controllers\restore@registerUser');
Route::post('loginUser','App\Http\Controllers\restore@loginUser');
Route::post('loginSupplier','App\Http\Controllers\supplier@loginSupplier');
// Route::view('/Admin','Admin.register')->name('register');
Route::view('/Admin','Admin.login');
Route::view('/supplier','supplier.login');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('allocate','App\Http\Controllers\allocateController');
