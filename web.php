<?php

use App\Admin;
use App\User;

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

Route::get('/', 'HomeController@index')->name('home');
Route::resource('/admin', 'AdminController');
Route::get('/login', 'AdminController@login')->name('admin.login');
Route::get('/adminprofile', 'AdminController@profile')->name('admin.profile');
Route::post('/login', 'LoginVerify@verify');
Route::get('/logout', 'LogoutController@index')->name('logout.index');
Route::get('/employeelogout', 'EmployeeLogoutController@index')->name('employeelogout.index');
Route::resource('/employee', 'EmployeeController');
Route::get('/elogin', 'EmployeeController@login')->name('employee.login');
Route::post('/elogin', 'EloginVerifyController@verify');
Route::resource('/product', 'ProductController');
Route::get('/productview', 'ProductController@view')->name('product.view');
Route::get('/aproductview', 'ProductController@aview')->name('admin.view');
Route::get('/employee_list', 'AdminController@list')->name('employee.list');
Route::get('/employee_profile/{id}', 'EmployeeController@profile')->name('employee.profile');


