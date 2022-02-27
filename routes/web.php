<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MethodsController;
use App\Http\Controllers\UsersController;
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

Route::middleware('admin')->group(function (){
    
    Route::get('/dashboard', '\App\Http\Controllers\DashboardController@index')->name('dashboard.index');
    
    Route::get('/transactions/stats', '\App\Http\Controllers\TransactionController@stats')->name('transactions.stats');
    Route::get('/transactions', '\App\Http\Controllers\TransactionController@index')->name('transactions.index');
    Route::delete('/transactions/sales/{sale_id}/products/{sold_id}/delete', '\App\Http\Controllers\SaleController@deleteProduct')->name('sales.products.delete');

    Route::resource('users', '\App\Http\Controllers\UsersController');
    Route::put('/users/{id}/restore', '\App\Http\Controllers\UsersController@restore')->name('users.restore');

});



Route::get('/', '\App\Http\Controllers\AuthController@showLogin');
Route::post('/', '\App\Http\Controllers\AuthController@login')->name('login');




Route::resource('/transactions/expenses', '\App\Http\Controllers\ExpensesController');

Route::resource('/transactions/sales', '\App\Http\Controllers\SaleController');
Route::get('/transactions/sales/{id}/finalize', '\App\Http\Controllers\SaleController@finalize')->name('sales.finalize');
Route::get('/transactions/sales/{id}/products/create', '\App\Http\Controllers\SaleController@createProduct')->name('sales.products.create');
Route::post('/transactions/sales/{id}/products/store', '\App\Http\Controllers\SaleController@storeProduct')->name('sales.products.store');
Route::post('/transactions/sales/{id}/products/storeManually', '\App\Http\Controllers\SaleController@storeProductManually')->name('sales.products.storeManual');
Route::post('/transactions/sales/{sale_id}/products/checkoutWithPayment', '\App\Http\Controllers\SaleController@checkoutWithPayment')->name('sales.products.checkoutWithPayment');
Route::post('/transactions/sales/{sale_id}/products/checkout', '\App\Http\Controllers\SaleController@checkout')->name('sales.products.checkout');
Route::post('/transactions/sales/{sale_id}/products/tryout', '\App\Http\Controllers\SaleController@tryout')->name('sales.products.tryout');
Route::post('/transactions/sales/{sale_id}/products/add/{sold_id}', '\App\Http\Controllers\SaleController@addProduct')->name('sales.products.add');
Route::post('/transactions/sales/{sale_id}/products/{sold_id}/remove', '\App\Http\Controllers\SaleController@removeProduct')->name('sales.products.remove');
Route::get('/transactions/sales/{sale_id}/products/payments', '\App\Http\Controllers\SaleController@payments')->name('sales.payments.index');
Route::get('/transactions/sales/{sale_id}/products/payments/create', '\App\Http\Controllers\SaleController@createPayments')->name('sales.payments.create');
Route::post('/transactions/sales/{sale_id}/products/payments/store', '\App\Http\Controllers\SaleController@storePayments')->name('sales.payments.store');

Route::resource('/inventory/categories', '\App\Http\Controllers\CategoryController');

Route::resource('/inventory/products', '\App\Http\Controllers\ProductController');

Route::resource('/clients', '\App\Http\Controllers\ClientsController');

Route::resource('/transaction/balances', '\App\Http\Controllers\BalancesController');

Route::resource('/providers', '\App\Http\Controllers\ProvidersController');

Route::resource('/methods', '\App\Http\Controllers\PaymentMethodsController');



Route::resource('/transactions/receipts', '\App\Http\Controllers\ReceiptsController');








Route::get('/inventory/stats', '\App\Http\Controllers\InventoryController@stats')->name('inventory.stats');

Route::get('/providers', '\App\Http\Controllers\ProvidersController@index')->name('providers.index');
Route::get('/profile', '\App\Http\Controllers\ProfileController@index')->name('profile.index');
Route::put('/profile/updatePassword', '\App\Http\Controllers\ProfileController@updatePassword')->name('profile.update.password');

Route::post('/logout', '\App\Http\Controllers\AuthController@logout')->name('logout');

Route::get('/print/test/', '\App\Http\Controllers\PrintController@test')->name('print.test');

Route::get('/transaction/test', '\App\Http\Controllers\TransactionController@test')->name('transaction.test');
