<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Customer\CustomerOrderController;
use App\Http\Controllers\Customer\CustomerOrderHistoryController;
use App\Http\Controllers\Customer\CustomerPaidController;
use App\Http\Controllers\Customer\CustomerPaymentController;
use App\Http\Controllers\CustomerView\CustomerHomeController;
use App\Http\Controllers\service\ServiceCarController;
use App\Http\Controllers\Service\ServiceCarDriverController;
use App\Http\Controllers\Service\ServiceController;
use App\Http\Controllers\Service\ServiceDetailController;
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
    return view('auth.login');
});
// Route::group(['middleware' => ['auth']], function () {
//     Route::resource("/admins", AdminController::class);
//     Route::get('/adminCreate', [AdminController::class, 'create'])->name('admin.create');
//     Route::get('/adminRoles', [AdminController::class, 'roles'])->name('adminRoles.roles');

//     Route::resource("/services", ServiceController::class);

//     Route::resource("/serviceCars", ServiceCarController::class);
//     Route::get('/serviceCarCreate', [ServiceCarController::class, 'create'])->name('serviceCarCreate.create');

//     Route::resource("/serviceCarDrivers", ServiceCarDriverController::class);
//     Route::get('/serviceCarDriverCreate', [ServiceCarDriverController::class, 'create'])->name('serviceCarDriverCreate');

//     Route::resource("/serviceTypeMatch", ServiceTypeMatchController::class);

//     Route::resource("/customers", CustomerController::class);
//     Route::resource("/customerOrder", CustomerOrderController::class);
//     Route::resource("/customerHistory", CustomerOrderHistoryController::class);
//     Route::resource("/customerPayment", CustomerPaymentController::class);
//     Route::resource("/customerPaid", CustomerPaidController::class);


//     Route::get('/customerHome/order/{id}', [CustomerHomeController::class, 'orderDetail'])->name('customer.orderDetail');
//     Route::post('/customerHome/orderConfrim', [CustomerHomeController::class, 'orderConfrim'])->name('customer.orderConfrim');

//     Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
// });
// Route::resource("/customerHome", CustomerHomeController::class);
// Route::group(['middleware' => ['guest']], function () {
//     Route::post('/login', [LoginController::class, 'login'])->name('login');
//     Route::get('/login', [LoginController::class, 'show'])->name('login.show');
//     Route::get('/show', [LoginController::class, 'show'])->name('show');
// });

Route::group(['middleware' => ['auth', 'admin']], function () {

    Route::get('/adminHome', [AdminController::class, 'home'])->name('adminHome');
    Route::resource("/admins", AdminController::class);
    Route::resource("/admins", AdminController::class);
    Route::get('/adminCreate', [AdminController::class, 'create'])->name('admin.create');
    Route::get('/adminRoles', [AdminController::class, 'roles'])->name('adminRoles.roles');

    Route::resource("/services", ServiceController::class);
    Route::resource("/services", ServiceController::class);
    Route::resource("/serviceCars", ServiceCarController::class);
    Route::get('/serviceCarCreate', [ServiceCarController::class, 'create'])->name('serviceCarCreate.create');

    Route::resource("/serviceCarDrivers", ServiceCarDriverController::class);
    Route::get('/serviceCarDriverCreate', [ServiceCarDriverController::class, 'create'])->name('serviceCarDriverCreate');

    Route::resource("/serviceTypeMatch", ServiceTypeMatchController::class);

    Route::resource("/customers", CustomerController::class);
    Route::resource("/customerOrder", CustomerOrderController::class);
    Route::resource("/customerHistory", CustomerOrderHistoryController::class);
    Route::resource("/customerPayment", CustomerPaymentController::class);
    Route::resource("/customerPaid", CustomerPaidController::class);

    Route::get('/customerHome/order/{id}', [CustomerHomeController::class, 'orderDetail'])->name('customer.orderDetail');
    Route::post('/customerHome/orderConfrim', [CustomerHomeController::class, 'orderConfrim'])->name('customer.orderConfrim');
});

Route::group(['middleware' => ['auth', 'driver']], function () {
    Route::get('/adminHome', [AdminController::class, 'home'])->name('adminHome');
    Route::resource("/customerOrder", CustomerOrderController::class);
});


Route::group(['middleware' => ['auth', 'customer']], function () {
    Route::get('/customerHome/order/{id}', [CustomerHomeController::class, 'orderDetail'])->name('customer.orderDetail');
    Route::post('/customerHome/orderConfrim', [CustomerHomeController::class, 'orderConfrim'])->name('customer.orderConfrim');
});

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::resource("/customers", CustomerController::class);
});


Route::group(['middleware' => ['guest']], function () {
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::get('/login', [LoginController::class, 'show'])->name('login.show');
    Route::get('/show', [LoginController::class, 'show'])->name('show');
});

Route::resource("/customerHome", CustomerHomeController::class);
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
