<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

ROute::group(['middleware' => 'auth:api'], function ()
{
	# auth:apied routes
	Route::resource('departments', 'DepartmentsController');
	Route::resource('companies', 'CompaniesController');
	Route::resource('documents', 'DocumentsController');
	Route::resource('items', 'ItemsController');
	Route::resource('orders', 'OrdersController');
	Route::resource('paymentmethods', 'PaymentMethodsController');
	Route::resource('providers', 'ProvidersController');
	Route::resource('accounts', 'AccountsController');
	Route::resource('accountbudget', 'AccountBudgetController');
	Route::resource('budgets', 'BudgetsController');
});