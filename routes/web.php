<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\controllerMain;

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

Route::get('halo', function () {
    return "Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('web', function() {
	return view('awal');
});

Route::get('tentang', function() {
	return view('tentang');
});

Route::get('hubungi', function() {
	return view('form');
});
Route::view('hubungi', 'form');
Route::post('add', [controllerMain::class, 'simpan']);

Route::get('php', function() {
	return view('php');
});

Route::get('html', function() {
	return view('html');
});

Route::get('android', function() {
	return view('android');
});

Route::get('php1', function() {
	return view('php1');
});

Route::get('php2', function() {
	return view('php2');
});

Route::get('list', function() {
	return view('list');
});

Route::get('html1', function() {
	return view('html1');
});

Route::get('html2', function() {
	return view('html2');
});
Route::get('android1', function() {
	return view('android1');
});
Route::get('android2', function() {
	return view('android2');
});