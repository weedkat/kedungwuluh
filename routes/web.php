<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuratKeteranganUmumController;
use App\Http\Controllers\SuratKeteranganTidakMampuController;
use App\Http\Controllers\LaporanKeluhanController;
use App\Http\Controllers\SuratKeteranganUsahaController;
use App\Http\Controllers\SuratPengantarCatatanKepolisianController;
use App\Http\Controllers\SuratPengantarUmumController;
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
Route::get('/peta', function () {
    return view('blog.peta');
});

Auth::routes();
Route::resources([
    'sku' => SuratKeteranganUmumController::class,
    'sktm' => SuratKeteranganTidakMampuController::class,
    'lapor' =>  LaporanKeluhanController::class,
    'skus' => SuratKeteranganUsahaController::class,
    'spck' => SuratPengantarCatatanKepolisianController::class,
    'spu' => SuratPengantarUmumController::class,
    'admin' => AdminController::class,
]);


