<?php

use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Customer\CustomerOrderController;
use App\Http\Controllers\Customer\CustomerOrderHistoryController;
use App\Http\Controllers\Customer\CustomerPaidController;
use App\Http\Controllers\Customer\CustomerPaymentController;
use App\Http\Controllers\service\ServiceCarController;
use App\Http\Controllers\Service\ServiceController;
use App\Http\Controllers\service\ServiceFeeController;
use App\Http\Controllers\service\ServiceTypeMatchController;
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
    return view('admin.service.index');
});
Route::resource("/services", ServiceController::class);
Route::resource("/serviceCar", ServiceCarController::class);
Route::resource("/serviceTypeMatch", ServiceTypeMatchController::class);
Route::resource("/customers", CustomerController::class);
Route::resource("/customerOrder", CustomerOrderController::class);
Route::resource("/customerHistory", CustomerOrderHistoryController::class);
Route::resource("/customerPayment", CustomerPaymentController::class);
Route::resource("/customerPaid", CustomerPaidController::class);
