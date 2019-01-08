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
use App\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
// // Route::get('/', function () {
//     // return view('faq');
// });
route::resource('/','FaqController');
Route::get('/admin', function () {
    return view('layouts.app');
  });

Route::resource('/admin/kategori', 'kategoriController');
Route::get('/table/kategori', 'kategoriController@dataTable')->name('table.kategori');

Route::resource('/admin/konten', 'kontenController');
Route::get('/table/konten', 'kontenController@dataTable')->name('table.konten');

Route::resource('/admin/navigator', 'NavigatorController');
Route::get('/table/navigator', 'NavigatorController@dataTable')->name('table.navigator');

// Route::resource('/admin/kontak', 'kontakController');
// Route::get('/table/kontak', 'kontakController@dataTable')->name('table.kontak');
