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

Route::get('/main', function () {
    return view('main', [
        "tittle" => "Beranda"
    ]);
    
});

Route::get('/layanan', function () {
    return view('layanan', [
        "tittle" => "Layanan"
    ]);
});

Route::get('/berita', function () {
    return view('berita', [
        "tittle" => "Berita"
    ]);
});

Route::get('/materi', function () {
    return view('materi', [
        "tittle" => "Materi"
    ]);
});

Route::get('/rilisData', function () {
    return view('rilisData', [
        "tittle" => "Rilis Data"
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        "tittle" => "Kontak"
    ]);
});

Route::get('/survei', function () {
    return view('survei', [
        "tittle" => "Survei"
    ]);
});

Route::get('/faq', function () {
    return view('faq', [
        "tittle" => "FAQ"
    ]);
});

Route::get('/admin/login', function(){
    return view('admin/login', [
        "tittle" => "Admin | Login"
    ]);
});

Route::get('/admin/about', function(){
    return view('admin/about', [
        "tittle" => "About"
    ]);
});

Route::get('/admin/profile', function(){
    return view ('admin/profile', [
        "tittle" => "Profile"
    ]);
});

Route::get('/layout/layoutProfile', function(){
    return view ('layout/layoutProfile', [
        "tittle" => "Profile"
    ]);
});

