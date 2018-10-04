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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//login
Route::get('/admin/login', 'AdminController@showLogin')->name('admin.show_login');
Route::post('/admin/login', 'AdminController@login')->name('admin.login');

//admin
Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/admin/email/edit', 'EmailController@edit')->name('email.edit');
Route::get('/admin/email/history', 'EmailController@history')->name('email.history');
Route::get('/admin/email-system', 'EmailSystemController@systemEmail')->name('email.system');
Route::get('/admin/email-system/company', 'EmailSystemController@listCompany')->name('company.index');
Route::get('/admin/email-system/customer', 'EmailSystemController@listCustomer')->name('customer.index');
Route::get('/admin/email-system/import', 'EmailSystemController@importCsv')->name('import.csv');
Route::get('/admin/email-system/role', 'EmailSystemController@listRole')->name('role.index');
Route::get('/admin/email-system/config', 'EmailSystemController@configEmail')->name('email.config');
Route::get('/admin/setting-templates', 'SystemController@index')->name('temlates.system');
Route::get('/admin/setting-templates/user-master', 'SystemController@userMaster')->name('templates.user_master');
Route::get('/admin/setting-templates/template-master', 'SystemController@templateMaster')->name('templates.template_master');