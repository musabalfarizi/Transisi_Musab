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

Route::get('/', function () {
    return view('welcome');
});

Route::match(['get','post'],'Transisi/Admin', 'AdminController@index');

Route::match(['get','post'],'checklogin','AdminController@checklogin');

Route::match(['get','post'], 'logout','AdminController@logout');

Route::match(['get','post'],'Transisi/Companies/', 'CompaniesController@index');
Route::match(['get','post'],'Transisi/Companies/Create', 'CompaniesController@create');
Route::match(['get','post'],'Transisi/Companies/CreatePost', 'CompaniesController@store');
Route::match(['get','post'],'Transisi/Companies/Update/{id_companies}', 'CompaniesController@edit');
Route::match(['get','post'],'Transisi/Companies/UpdatePost/{id_companies}', 'CompaniesController@Update');
Route::match(['get','post'],'Transisi/Companies/Tampil/{id_companies}', 'CompaniesController@show');
Route::delete('Companies/{id_companies}', 'CompaniesController@destroy');

Route::match(['get','post'],'Transisi/Employees/', 'EmployeesController@index');
Route::match(['get','post'],'Transisi/Employees/Create', 'EmployeesController@create');
Route::match(['get','post'],'Transisi/Employees/CreatePost', 'EmployeesController@store');
Route::match(['get','post'],'Transisi/Employees/Update/{id_employees}', 'EmployeesController@edit');
Route::match(['get','post'],'Transisi/Employees/UpdatePost/{id_employees}', 'EmployeesController@Update');
Route::match(['get','post'],'Transisi/Employees/Tampil/{id_employees}', 'EmployeesController@show');
Route::delete('Employees/{id_employees}', 'EmployeesController@destroy');