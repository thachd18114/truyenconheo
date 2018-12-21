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
    return view('backend.layouts.index');
});
Route::get('/admin/danhsachtacgia', 'TacGiaController@index')->name('danhsachtacgia.index');
Route::get('/admin/danhsachdocgia', 'DocGiaController@index')->name('danhsachdocgia.index');
Route::resource('/admin/theloai','TheLoaiController');
