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

Route::get('/home', function () {
    return view('home', ['cek' => 'home']);
});

Route::get('/mahasiswa/cari', 'MahasiswaController@pencarian');
Route::get('/mahasiswa/formMhs', 'MahasiswaController@formmahasiswa');
Route::post('/mahasiswa/simpanmahasiswa','MahasiswaController@simpanmahasiswa');
Route::get('/mahasiswa/editmhs/{id}', 'MahasiswaController@editmhs');
Route::put ('mahasiswa/updatemhs/{id}', 'MahasiswaController@updatemhs');
Route::get ('mahasiswa/hapusmhs/{id}', 'MahasiswaController@hapusmhs');

//middleware
Route::get ('/user', 'AuthController@user')->middleware('auth');
Route::get ('/user/formuliruser', 'AuthController@formuliruser')->middleware('auth');
Route::post('/user/simpanuser','AuthController@simpanuser')->middleware('auth');
Route::get('/user/edituser/{id}', 'AuthController@edituser');
Route::put ('/user/simpanupdateuser', 'AuthController@simpanupdateuser');

Route::get ('user/hapususer/{id}', 'AuthController@hapususer');
Route::get ('/', 'AuthController@login')->name('login');
Route::post ('/user/ceklogin', 'AuthController@ceklogin')->middleware('guest');
Route::get ('/logout', 'AuthController@logout')->middleware('auth');
Route::get('/mahasiswa', 'MahasiswaController@mahasiswa')->middleware('auth');

