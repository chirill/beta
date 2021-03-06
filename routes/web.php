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

Route::group(['middleware'=>'admin'],function(){
    Route::get('/admin/users/trashed','AdminUsersController@trashed')->name('users.trashed');
    Route::get('/admin/users/restore/{user}','AdminUsersController@restore');
    Route::resource('/admin/users','AdminUsersController');

    Route::get('/admin',function(){
        return view('admin.index');
    })->name('admin');

    Route::get('/admin/roles/trashed','AdminRolesController@trashed')->name('roles.trashed');
    Route::get('/admin/roles/restore/{user}','AdminRolesController@restore');
    Route::resource('/admin/roles','AdminRolesController');

    Route::get('/admin/locations/trashed','AdminLocationsController@trashed')->name('locations.trashed');
    Route::get('/admin/locations/restore{location}','AdminLocationsController@restore')->name('locations.restore');
    Route::resource('/admin/locations','AdminLocationsController');

    Route::get('/admin/printers/trashed','AdminPrintersController@trashed')->name('printers.trashed');
    Route::get('/admin/printers/restore{location}','AdminPrintersController@restore')->name('printers.restore');
    Route::resource('/admin/printers','AdminPrintersController');

    Route::resource('/broker/comps','BrokerCompsController');

});



