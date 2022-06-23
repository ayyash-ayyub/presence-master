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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login2', function () {
    return view('auth/login2');
});

Route::get('/register', function (){
	return view('auth/login');
});

Route::get('/kegiatan2', function () {
    return view('kegiatan/index2');
});
// membatasi akses direct link url ke admin kegiatan
Route::resource('kegiatan', 'KegiatanController')->middleware(['auth']);

 //Route::resource('peserta', 'PesertaController');
Route::get('/peserta/thanks', 'PesertaController@thanks')->name('peserta.thanks');
Route::get('/peserta/{slug}', 'PesertaController@create')->name('peserta.create');
Route::get('/peserta', function() {
    abort(404);
});
Route::post('/peserta', 'PesertaController@store')->name('peserta.store');

Auth::routes();




//Route::get('/home', 'HomeController@index')->name('home');
