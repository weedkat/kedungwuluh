<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuratKeteranganUmumController;

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
    return view('home');
});

Auth::routes();
Route::resource('admin', AdminController::class);
Route::resource('sku', SuratKeteranganUmumController::class);
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/vaksin', function(){
    return view('blog.vaksin');
});
Route::get('/narkoba', function(){
    return view('blog.narkoba');
});
Route::get('/sku', function(){
    return view('form.suratKeteranganUmum');
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

