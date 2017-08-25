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

// Pengaturan
Route::get('/setting', 'DepartemenController@index')->name('setting');
Route::resource('departemen', 'DepartemenController');
Route::resource('jabatan', 'JabatanController');
Route::resource('staff', 'StaffController');


// Route::get('/', 'HomeController@index')->name('home');
// Route::get('/home', 'HomeController@home')->name('home');

// Route::get('/report', 'ReportController@index')->name('report');
// Route::get('/report/produk', 'ReportController@produk')->name('report');
// Route::get('/report/sarana', 'ReportController@sarana')->name('report');
// Route::get('/report/barcode', 'ReportController@barcode')->name('report');


// // system
// Route::resource('system/user', 'System\UserController');
// Route::resource('system/module_category', 'System\ModuleCategoryController');

// // master
// Route::resource('master/sarana', 'Master\SaranaController');
// Route::resource('master/location', 'Master\LocationController');

// // rekanan
// // TODO - change RekananController to AuthController
// Route::group(['middleware' => ['web']], function () {
//     Route::get('/rekanan', 'Rekanan\RekananController@index');
    
// });

// Route::get('/rekanan/profile', 'Rekanan\RekananController@profile');
// Route::get('/rekanan/produk', 'Rekanan\RekananController@produk');
// Route::get('/rekanan/request', 'Rekanan\RekananController@request');
// Route::get('/rekanan/barcode_list/{type}', 'Rekanan\RekananController@barcode_list');

// Route::get('rekanan/register', 'Rekanan\AuthController@register');
// Route::get('rekanan/login', 'Rekanan\AuthController@login');
// Route::get('rekanan/logout', 'Rekanan\AuthController@logout');

// Route::post('rekanan', 'Rekanan\AuthController@create')->name('rekanan');
// Route::post('rekanan/login', 'Rekanan\AuthController@doLogin')->name('rekanan/login');

// // api
// // Route::get('api/produk/barcode/', 'Api\ProdukController@getUsingBarcode');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
