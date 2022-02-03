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
    return view('templete.index');
})->name('inicio');

Route::get('/generic', function () {
    return view('templete.generic');
})->name('generic');

Route::get('/esi', function () {
    return view('templete.esi');
})->name('esi');

Route::get('/csi', function () {
    return view('templete.csi');
})->name('csi');

Route::get('/ccs', function () {
    return view('templete.ccs');
})->name('ccs');

Route::get('/sccd', function () {
    return view('templete.sccd');
})->name('sccd');

Route::get('/scltr', function () {
    return view('templete.scltr');
})->name('scltr');

Route::get('/sacs', function () {
    return view('templete.sacs');
})->name('sacs');

Route::get('/pcr', function () {
    return view('templete.pcr');
})->name('pcr');

Route::get('/csira', function () {
    return view('templete.csira');
})->name('csira');

Route::get('/pdcacs', function () {
    return view('templete.pdcacs');
})->name('pdcacs');