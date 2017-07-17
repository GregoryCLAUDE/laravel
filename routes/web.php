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
//arrivée page d'accueil//

Route::get("/", "CustomerController@welcome");

//routes for customers crud action//

Route::get("/customerNew", "CustomerController@welcome");

Route::get("/customers","CustomerController@getAllCustomers");

Route::get("customer/{id}", "CustomerController@getCustomer");

Route::get("deleteCustomer/{id}", "CustomerController@deleteCustomer");

Route::post("updateCustomer/{id}", "CustomerController@updatecustomer");

Route::post("/createCustomer", "CustomerController@createCustomer");

//Routes for products CRUD action//

Route::get("/productNew", "ProductController@welcome");

Route::get("/products", "ProductController@getAllProducts");

Route::get("/product/{id}","ProductController@getProduct");

Route::get("deleteProduct/{id}", "ProductController@deleteProduct");

Route::post("updateProduct/{id}", "ProductController@updateProduct");

Route::post("/createProduct","ProductController@addProduct");

//Routes for groups CRUD action//

Route::get("/groupNew", "GroupController@Welcome");

Route::get("/groups", "GroupController@getAllGroups");

Route::get("/group/{id}", "GroupController@getGroup");

Route::get("/deleteGroup/{id}", "Groupcontroller@deletegroup");

Route::post("/createGroup", "GroupController@addGroup");
