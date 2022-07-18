<?php

use Illuminate\Support\Facades\Route;

use App\Http\Contollers\pengenalanController;

use App\Http\Contollers\PostController;

use App\Http\Contollers\StaffBranchController;

use App\Http\Contollers\StaffController;

use App\Http\Contollers\BranchController;

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

Route::get('/welcome', function () {
    echo ('<center>');
    echo ('<u>Hello semuanya, apa kabar?</u> <br>');
    echo ('<u>Pada kali ini kita sedang belajar route basic</u>');
    echo ('</center>');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/page1', function () {
    return view('page1.index');
});

Route::get('/page2', function () {
    return view('page2.index');
});

Route::get('/page3', function () {
    return view('page3.index');
});

//Ruote Parameter
Route::get('/biodata/{nama}/{umur}/{alamat}/{jenis_kelamin}/{hobby}', function ($nama,$umur,$alamat,$jenis_kelamin,$hobby) {
    return view('page1.biodata', compact('nama','umur','alamat','jenis_kelamin','hobby'));
});

//Route Optional Parameter
Route::get('/pesanan/{pesanan?}/{pesanan1?}', function ($pesanan = 'kosong', $pesanan1 = 'kosong') {
    return view('page1.pesanan', compact('pesanan','pesanan1'));
});

Route::get('/pengenalan', [App\Http\Controllers\pengenalanController::class,'pengenalan']);

Route::get('/intro/{nama}/{alamat}/{umur}', [App\Http\Controllers\pengenalanController::class,'intro']);

Route::get('/siswa', [App\Http\Controllers\pengenalanController::class,'siswa']);

Route::get('/menu', [App\Http\Controllers\LatihanController::class,'menu']);

Route::get('/kampus', [App\Http\Controllers\LatihanController::class,'kampus']);

Route::get('/tv', [App\Http\Controllers\LatihanController::class,'tv']);

Route::get('/belanja', [App\Http\Controllers\LatihanController::class,'belanja']);

Route::get('/post', [App\Http\Controllers\PostController::class,'index']);

Route::get('/staffbranch', [App\Http\Controllers\StaffBranchController::class,'index']);

Route::get('/staff', [App\Http\Controllers\StaffController::class,'index']);

Route::get('/branch', [App\Http\Controllers\BranchController::class,'index']);