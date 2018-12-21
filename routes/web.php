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
Route::get('/admin/danhsachloai', 'TheLoaiController@index')->name('danhsachloai.index');
Route::get('/admin/danhsachtacgia', 'TacGiaController@index')->name('danhsachtacgia.index');
Route::get('/admin/danhsachdocgia', 'DocGiaController@index')->name('danhsachdocgia.index');
Route::get('/admin/danhsachloai/{id}', 'TheLoaiController@edit')->name('danhsachloai.edit');
Route::put('/admin/danhsachloai/{id}', 'TheLoaiController@update')->name('danhsachloai.update');
Route::delete('/admin/danhsachloai/{id}', 'TheLoaiController@destroy')->name('danhsachloai.destroy');
Route::get('/admin/danhsachloai/create', 'TheLoaiController@create')->name('danhsachloai.create');
Route::post('/admin/danhsachloai/create', 'TheLoaiController@store')->name('danhsachloai.store');
