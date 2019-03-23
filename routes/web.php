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
    return view('welcome');
});

Route::get('/soma', function () {
    return view('soma');
});

Route::get('/subtracao', function () {
    return view('subtracao');
});

Route::get('/multiplicacao', function () {
    return view('multiplicacao');
});

Route::get('/divisao', function () {
    return view('divisao');
});

Route::post('soma', 'operacoes@soma');

Route::post('multiplicacao', 'operacoes@multiplicacao');

Route::post('divisao', 'operacoes@divisao');

Route::post('subtracao', 'operacoes@subtracao');
