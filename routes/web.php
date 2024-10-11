<?php

use App\Http\Controllers\ServiceController;
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

Route::get('/', [ServiceController::class, 'index'])->name('index');
Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');
Route::post('/service/store', [ServiceController::class, 'store'])->name('service.store');
Route::get('/service/detail/{no_service}', [ServiceController::class, 'detail'])->name('service.detail');
Route::post('/service/detail/store', [ServiceController::class, 'storeDetail'])->name('service.detail.store');
Route::post('/service/detail/update', [ServiceController::class, 'updateDetail'])->name('service.detail.update');
Route::get('/service/detail/delete/{id}', [ServiceController::class, 'deleteDetail'])->name('service.detail.delete');

Route::post('/service/additional/store', [ServiceController::class, 'storeAdditional'])->name('service.additional.store');

Route::get('/service/print/{no_service}', [ServiceController::class, 'print'])->name('service.print');

Route::get('/service/data', [ServiceController::class, 'data'])->name('service.data');
