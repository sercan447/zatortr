<?php


Route::get('/', function () {
    return view('anasayfa');
});
Route::get('/urunler', function () {
    return view('urunler');
});
Route::get('/dunyadapartnerlerimiz', function () {
    return view('dunyadapartnerimiz');
});
Route::get('/sistemler', function () {
    return view('sistemler');
});
Route::get('/haberler', function () {
    return view('haberler');
});
Route::get('/iletisim', function () {
    return view('iletisim');
});
Route::get('/bultenekatil', function () {
    return view('bultenekatil');
});
