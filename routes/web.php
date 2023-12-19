<?php

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

Route::get('/', 'App\Http\Controllers\HomeController@login')->name('login');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::group(['middleware'=>['auth']], function(){

    Route::get('/dashboard', 'App\Http\Controllers\HomeController@dashboard')->name('dashboard');
    Route::get('/user', 'App\Http\Controllers\HomeController@user')->name('user');

    // divisi
    Route::get('/divisi', 'App\Http\Controllers\Bidang_DivisiController@index')->name('divisi');
    Route::get('/divisi/create', 'App\Http\Controllers\Bidang_DivisiController@create')->name('divisi.create');
    Route::post('/divisi/store', 'App\Http\Controllers\Bidang_DivisiController@store')->name('divisi.store');
    Route::get('/divisi/edit/{divisi}', 'App\Http\Controllers\Bidang_DivisiController@edit')->name('divisi.edit');
    Route::post('/divisi/update/{divisi}', 'App\Http\Controllers\Bidang_DivisiController@update')->name('divisi.update');
    Route::get('/divisi/delete/{divisi}', 'App\Http\Controllers\Bidang_DivisiController@delete')->name('divisi.delete');

     //DataKaryawan
    Route::get('/datakaryawan', 'App\Http\Controllers\DataKaryawanController@index')->name('data_karyawan');
    Route::get('/datakaryawan/create', 'App\Http\Controllers\DataKaryawanController@create')->name('data_karyawan.create');
    Route::post('/datakaryawan/store', 'App\Http\Controllers\DataKaryawanController@store')->name('data_karyawan.store');
    Route::get('/datakaryawan/edit/{data_karyawan}', 'App\Http\Controllers\DataKaryawanController@edit')->name('data_karyawan.edit');
    Route::post('/datakaryawan/update/{data_karyawan}', 'App\Http\Controllers\DataKaryawanController@update')->name('data_karyawan.update');
    Route::get('/datakaryawan/delete/{data_karyawan}', 'App\Http\Controllers\DataKaryawanController@delete')->name('data_karyawan.delete');
    Route::get('/datakaryawan/export_excel', 'App\Http\Controllers\DataKaryawanController@export_excel')->name('data_karyawan.excel');
    Route::get('/datakaryawan/cetak_pdf', 'App\Http\Controllers\DataKaryawanController@cetak_pdf')->name('data_karyawan.pdf');

    Route::get('/jenis_kelamin', 'App\Http\Controllers\Jenis_KelaminController@index')->name('jenis_kelamin');
    Route::get('/jenis_kelamin/create', 'App\Http\Controllers\Jenis_KelaminController@create')->name('jenis_kelamin.create');
    Route::post('/jenis_kelamin/store', 'App\Http\Controllers\Jenis_KelaminController@store')->name('jenis_kelamin.store');
    Route::get('/jenis_kelamin/edit/{jenis_kelamin}', 'App\Http\Controllers\Jenis_KelaminController@edit')->name('jenis_kelamin.edit');
    Route::post('/jenis_kelamin/update/{jenis_kelamin}', 'App\Http\Controllers\Jenis_KelaminController@update')->name('jenis_kelamin.update');
    Route::get('/jenis_kelamin/delete/{jenis_kelamin}', 'App\Http\Controllers\Jenis_KelaminController@delete')->name('jenis_kelamin.delete');

    Route::get('/gol', 'App\Http\Controllers\GolController@index')->name('gol');
    Route::get('/gol/create', 'App\Http\Controllers\GolController@create')->name('gol.create');
    Route::post('/gol/store', 'App\Http\Controllers\GolController@store')->name('gol.store');
    Route::get('/gol/edit/{gol}', 'App\Http\Controllers\GolController@edit')->name('gol.edit');
    Route::post('/gol/update/{gol}', 'App\Http\Controllers\GolController@update')->name('gol.update');
    Route::get('/gol/delete/{gol}', 'App\Http\Controllers\GolController@delete')->name('gol.delete');

    Route::get('/status', 'App\Http\Controllers\StatusController@index')->name('status');
    Route::get('/status/create', 'App\Http\Controllers\StatusController@create')->name('status.create');
    Route::post('/status/store', 'App\Http\Controllers\StatusController@store')->name('status.store');
    Route::get('/status/edit/{status}', 'App\Http\Controllers\StatusController@edit')->name('status.edit');
    Route::post('/status/update/{status}', 'App\Http\Controllers\StatusController@update')->name('status.update');
    Route::get('/status/delete/{status}', 'App\Http\Controllers\StatusController@delete')->name('status.delete');

    Route::get('/agama', 'App\Http\Controllers\AgamaController@index')->name('agama');
    Route::get('/agama/create', 'App\Http\Controllers\AgamaController@create')->name('agama.create');
    Route::post('/agama/store', 'App\Http\Controllers\AgamaController@store')->name('agama.store');
    Route::get('/agama/edit/{agama}', 'App\Http\Controllers\AgamaController@edit')->name('agama.edit');
    Route::post('/agama/update/{agama}', 'App\Http\Controllers\AgamaController@update')->name('agama.update');
    Route::get('/agama/delete/{agama}', 'App\Http\Controllers\AgamaController@delete')->name('agama.delete');

    //users
    Route::get('/user', 'App\Http\Controllers\UserController@index')->name('user');
    Route::get('/user/create', 'App\Http\Controllers\UserController@create')->name('user.create');
    Route::post('/user/store', 'App\Http\Controllers\UserController@store')->name('user.store');
    Route::get('/user/edit/{user}', 'App\Http\Controllers\UserController@edit')->name('user.edit');
    Route::post('/user/update/{user}', 'App\Http\Controllers\UserController@update')->name('user.update');
    Route::get('/user/delete/{user}', 'App\Http\Controllers\UserController@delete')->name('user.delete');
});


require __DIR__.'/auth.php';
