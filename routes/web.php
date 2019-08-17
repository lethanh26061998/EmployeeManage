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

Route::get('/', function(){
    return view('login');
});
// Auth::routes();

Route::get('login', 'LoginController@getLogin')->name('login');
Route::post('login', 'LoginController@postLogin');
Route::get('logout', 'LoginController@getLogout')->name('logout');


Route::get('/changepw', 'ResetPassword@show')->middleware('auth')->name('resetpw');
Route::post('/changepw', 'ResetPassword@reset')->name('resetpw.post')->middleware('auth');

Route::group(
    ['prefix' => 'admin',
    'middleware' => 'admin'],
    function () {
    Route::get('/', function(){
            return view('admin');
        });
    Route::get('/#', function(){
            return view('admin');
        })->name('admin');

    Route::get('/addAccount', 'UserController@create')->name('addAccount');
    Route::post('/addAccount', 'UserController@store')->name('addAccount');
    Route::get('/printlistUsers', 'UserController@printlistUser')->name('users');
    Route::get('/editUser/{id}', 'UserController@editUser');
    Route::post('/updateUser', 'UserController@updateUser')->name('updateUser');
    Route::get('/deleteUser/{id}', 'UserController@deleteUser');

    Route::post('/resetpwUser', 'UserController@updatepw')->name('updatepw');

    Route::get('/printlistPhongban', 'PhongbanController@printlistPhongban')->name('getPhongban');
    Route::get('/addPhongban', 'PhongbanController@create')->name('addPhongban');
    Route::post('/addPhongban', 'PhongbanController@store')->name('addPhongban');
    Route::get('/editPhongban/{id}', 'PhongbanController@editPhongban');
    Route::post('/updatePhongban', 'PhongbanController@updatePhongban')->name('updatePhongban');
    Route::get('/deletePhongban/{id}', 'PhongbanController@deletePhongban');
});
        Route::get('/home', function(){
            return view('homeEmployee');
    });

        Route::get('getEmployees', 'EmployeeController@getEmployees')->name('getEmployees');

        Route::get('getProfile', 'EmployeeController@getProfile')->name('getProfile');
        Route::get('editProfile', 'EmployeeController@editProfile')->name('editProfile');
        Route::post('/updateProfile', 'EmployeeController@updateProfile')->name('updateProfile');

        Route::get('/profile', function(){
            return view('layouts.profile');
        });
        Route::get('export', 'EmployeeController@export')->name('export');



?>
