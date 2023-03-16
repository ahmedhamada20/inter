<?php

use App\Http\Controllers\Backend\CertificateController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('admin')->group(function (){
    Route::middleware('auth')->group(function (){
        Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
        Route::get('index',[CertificateController::class,'index'])->name('all_certificate');
        Route::get('certificate.blade.php',[CertificateController::class,'create'])->name('add_certificate');
        Route::get('edit-certificate.blade.php/{id}',[CertificateController::class,'edit'])->name('edit_certificate');
        Route::post('store-certificate.blade.php',[CertificateController::class,'store'])->name('store_certificate');
        Route::post('update-certificate.blade.php/{id}',[CertificateController::class,'update'])->name('update_certificate');
        Route::get('delete-certificate.blade.php/{id}',[CertificateController::class,'destroy'])->name('delete_certificate');
    });
});
