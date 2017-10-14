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

Route::get('/', function () { return view('welcome'); })->name('home');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Change Password Routes...
$this->get('perfil', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('perfil', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::group(['middleware'=> ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
	Route::get('/', 'AdminController@index');
	Route::resource('usuarios', 'Admin\UsersController',  ['middleware' => ['acl:administrador']]);
	Route::resource('roles', 'Admin\RolesController', ['middleware' => ['acl:administrador']]);
	Route::resource('permisos', 'Admin\PermissionsController', ['middleware' => ['acl:administrador']]);
	Route::resource('concursos', 'Admin\ContestsController', ['middleware' => ['acl:administrador|mod_global|mod_concursos']]);
});

