<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataActivityController;
use Illuminate\Support\Facades\Route;



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
// $router->get('/key', function(){
//         return str::random(32);
//     });


// Route::get('/', function () { return view('dashboard');});
Route::get('/', 'DashboardController');
Route::get('/dashboard', 'DashboardController');
Route::get('/data_activity', [DataActivityController::class, 'index']);
// Route::get('/data_activity', 'DataActivityController@index');
Route::get('/data_activity_create', [DataActivityController::class, 'create']);
Route::post('/data_activity_store', [DataActivityController::class, 'store']);
Route::get('/data_activity_edit/{id}', [DataActivityController::class, 'edit']);
// Route::patch('/data_activity_update/{id}', [DataActivityController::class, 'update']);
Route::patch('/data_activity_update/{id}', 'DataActivityController@update');
Route::get('/data_activity_detail/{id}', [DataActivityController::class, 'show']);


// Route::post('/data_activity_store', 'DataActivityController@store');
// Route::post('/data_activity_store','DataActivityController@save');
// Route::get('data_activity','DataActivityController@tambah')->name('konfigurasi/menu-sistem/tambah');
// Route::post('konfigurasi/menu-sistem/simpan','Konfigurasi\MenuSistemController@simpan')->name('konfigurasi/menu-sistem.simpan');





Route::get('/form_registrasi', function () {
    return view('form_registrasi');
});


// Route::get('/data_activity', function () {
//     return view('data_activity');
// });

// Route::get('/data_activity_detail', function () {
//     return view('data_activity_detail');
// });

// Route::get('/data_activity_edit', function () {
//     return view('data_activity_edit');
// });