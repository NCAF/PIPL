<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\OrderController;

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


// login route
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.post');

//register route
Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//destinasi route
Route::get('/', [DestinasiController::class, 'index'])->name('destinasi.index');
Route::get('/destinasi', [DestinasiController::class, 'indexAdd'])->name('destinasi.add');
Route::post('/destinasi/create', [DestinasiController::class, 'store'])->name('destinasi.store');
Route::put('/destinasi/{id}', [DestinasiController::class, 'update'])->name('destinasi.update');
Route::delete('/destinasi/{id}', [DestinasiController::class, 'destroy'])->name('destinasi.destroy');


//destinasi list
Route::get('/listDestinasi', [DestinasiController::class, 'listDestinasi'])->name('listDestinasi');

Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');

Route::get('/user/orders', [OrderController::class, 'userOrders'])->name('showOrders');
Route::post('/order/{id}/upload-payment-proof', [OrderController::class, 'uploadPaymentProof'])->name('order.uploadPaymentProof');
Route::get('/admin/orders', [OrderController::class, 'adminOrders'])->name('admin.orders');
Route::put('/admin/order/{id}/change-status', [OrderController::class, 'changeOrderStatus'])->name('admin.order.changeStatus');

