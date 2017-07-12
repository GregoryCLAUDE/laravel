<?php

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


Route::get("/", "CustomerController@welcome");

Route::get("/customers","CustomerController@getAllCustomers");

Route::get("customer/{id}", "CustomerController@getCustomer");

Route::post("updateCustomer/{id}", "CustomerController@updatecustomer");

Route::get("deleteCustomer/{id}", "CustomerController@deleteCustomer");

Route::post("/createCustomer", "CustomerController@createCustomer");
