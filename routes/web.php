<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\EkspedisiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransController;

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


Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/proses_login', [LoginController::class, 'proses_login'])->name('proses_login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/register', [UserController::class,'store'])->name('register');
Route::get('/',[PagesController::class, 'home']);
Route::get('/about',[UserController::class, 'about']);
Route::get('/shop',[UserController::class, 'shop']);
Route::get('/forum',[UserController::class, 'forum']);


Route::group(['middleware'=>['auth:admin']], function(){
        /* Admin Routing */
        Route::get('/administrator', [AdminController::class, 'welcome']);
        Route::post('/admin', [AdminController::class, 'store']);
        Route::get('/admin', [AdminController::class, 'index']);
        Route::get('/admin/create', [AdminController::class, 'create']);
        Route::post('/admin/{admin}', [AdminController::class, 'update']);
        Route::get('/admin/{admin}', [AdminController::class, 'show']);
        Route::get('/admin/{admin}/edit', [AdminController::class, 'edit']);
        Route::get('/admin/{admin}/active', [AdminController::class, 'enable']);
        
        /* Toko Routing */
        Route::get('/toko', [TokoController::class, 'index']);
        Route::post('/toko', [TokoController::class, 'store']);
        Route::get('/toko/create', [TokoController::class, 'create']);
        Route::post('/toko/{toko}', [TokoController::class, 'update']);
        Route::get('/toko/{toko}', [TokoController::class, 'show']);
        Route::get('/toko/{toko}/edit', [TokoController::class, 'edit']);
        Route::get('/toko/{toko}/active', [TokoController::class, 'enable']);

        /* Ekspedisi Routing */
        Route::get('/ekspedisi', [EkspedisiController::class, 'index']);
        Route::post('/ekspedisi', [EkspedisiController::class, 'store']);
        Route::get('/ekspedisi/create', [EkspedisiController::class, 'create']);
        Route::post('/ekspedisi/{ekspedisi}', [EkspedisiController::class, 'update']);
        Route::get('/ekspedisi/{ekspedisi}/edit', [EkspedisiController::class, 'edit']);
        Route::get('/ekspedisi/{ekspedisi}/delete', [EkspedisiController::class, 'delete']);

        /* Barang Routing */
        Route::get('/barang', [BarangController::class,'index']);
        Route::post('/barang', [BarangController::class, 'store']);
        Route::get('/barang/create', [BarangController::class,'create']);
        Route::post('/barang/{barang}', [BarangController::class, 'update']);
        Route::get('/barang/{barang}', [BarangController::class, 'show']);
        Route::get('/barang/{barang}/edit', [BarangController::class, 'edit']);

        /* User Routing */
        Route::get('/user', [UserController::class,'userindex']);
        Route::get('/user/{user}', [UserController::class, 'usershow']);

        /* Record Transaksi Routing */
        Route::get('/recordtransaksi', [TransController::class,'index']);
        Route::get('/recordtransaksi/{trans}', [TransController::class, 'show']);
});

Route::group(['middleware'=>['auth:user']], function(){
        Route::get('/profile', [UserController::class,'profile']);
        Route::post('/editprofile', [UserController::class,'upload']);
        Route::get('/editprofile', [UserController::class,'editprofile']);
        Route::post('/buy/{buy}', [UserController::class,'maketransaction']);
        Route::get('/buy/{buy}', [UserController::class,'buy']);
        Route::get('/orderhistory',[UserController::class, 'order']);     
});

Route::get('/{shop}', [UserController::class,'openshop']);