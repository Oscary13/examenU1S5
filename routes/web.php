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

Route::get('/index', function () {
    return view('templete.unidad1.index');
})->name('index');

Route::get('/', function () {
    return view('templete.inicio');
})->name('inicio');

Route::get('/generic', function () {
    return view('templete.unidad1.generic');
})->name('generic');

Route::get('/esi', function () {
    return view('templete.unidad1.esi');
})->name('esi');

Route::get('/csi', function () {
    return view('templete.unidad1.csi');
})->name('csi');

Route::get('/ccs', function () {
    return view('templete.unidad1.ccs');
})->name('ccs');

Route::get('/sccd', function () {
    return view('templete.unidad1.sccd');
})->name('sccd');

Route::get('/scltr', function () {
    return view('templete.unidad1.scltr');
})->name('scltr');

Route::get('/sacs', function () {
    return view('templete.unidad1.sacs');
})->name('sacs');

Route::get('/pcr', function () {
    return view('templete.unidad1.pcr');
})->name('pcr');

Route::get('/csira', function () {
    return view('templete.unidad1.csira');
})->name('csira');

Route::get('/pdcacs', function () {
    return view('templete.unidad1.pdcacs');
})->name('pdcacs');



Route::get('/index2', function () {
    return view('templete.unidad2.index');
})->name('index2');

Route::get('/tema1', function () {
    return view('templete.unidad2.tema1');
})->name('tema1');

Route::get('/tema2', function () {
    return view('templete.unidad2.tema2');
})->name('tema2');

Route::get('/tema3', function () {
    return view('templete.unidad2.tema3');
})->name('tema3');

Route::get('/tema4', function () {
    return view('templete.unidad2.tema4');
})->name('tema4');

Route::get('/tema5', function () {
    return view('templete.unidad2.tema5');
})->name('tema5');

Route::get('/tema6', function () {
    return view('templete.unidad2.tema6');
})->name('tema6');