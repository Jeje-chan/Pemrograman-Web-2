<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\formcontroller;
use App\Http\Controllers\formtugascontroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ControllerFrontend;
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

Route::get('/salam',function(){
    return view('salam', [
        "nama" =>"Azza",
        "umur" =>20
    ]); 
});

Route::get('/nilai',function(){
    return view('nilai');
});
 
Route::get('/form_periksa',function(){
    return view('form_periksa');
});

Route::get('/form',[formcontroller::class,'index']);
Route::post('/hasil',[formcontroller::class,'hasil']);

Route::get('/form_tugas9',[formtugascontroller::class,'index']);
Route::post('/hasil_tugas9',[formtugascontroller::class,'hasil_tugas9']);

Route::group(['middleware' => ['auth']], function(){
    Route::prefix('admin')->group(function(){
        Route::get('/dashboard',[DashboardController::class,'index']);
        Route::get('/produk',[ProdukController::class,'index']);
        Route::get('/kategori_produk',[KategoriProdukController::class,'index']);
        Route::get('/pesanan',[PesananController::class,'index']);
    
        Route::get('/produk/create', [ProdukController::class, 'create']);
        Route::post('/produk/store', [ProdukController::class, 'store']);
        Route::get('produk/edit/{id}',[ProdukController::class, 'edit']);
        Route::post('/produk/update/{id}',[ProdukController::class, 'update']); 
        Route::get('/produk/delete/{id}',[ProdukController::class, 'destroy']); 
    
        Route::get('/pesanan/create', [PesananController::class, 'create']);
        Route::post('/pesanan/store', [PesananController::class, 'store']);
        Route::get('/pesanan/edit/{id}',[PesananController::class, 'edit']);
        Route::post('/pesanan/update/{id}',[PesananController::class, 'update']); 
        Route::get('/pesanan/delete/{id}',[PesananController::class, 'destroy']); 
    
        Route::get('logout', [DashboardController::class, 'logout']);
    });
});


Route::prefix('layout10')->group(function(){
    Route::get('/home',[ControllerFrontend::class,'home']);
    Route::get('/about',[ControllerFrontend::class,'about']);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
