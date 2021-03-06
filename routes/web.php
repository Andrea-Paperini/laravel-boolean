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
    return view('homepage');
});

Route::get('/faq', function () {
    $data = [
        'lista_faq_sx' => config('dati.faqs_sx'),
        'lista_faq_dx' => config('dati.faqs_dx')
    ];
    return view('faq', $data);
})->name('pagina-faq');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');
