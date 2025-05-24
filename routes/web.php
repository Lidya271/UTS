<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/Home', function () {
    return view('Home');
});
Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/form', function () {
    return view('form');
});
Route::post('/form-submit', function (Request $request) {
    // Validasi & simpan (saat ini hanya contoh)
    return back()->with('success', 'Form berhasil dikirim!');
})->name('form.submit');