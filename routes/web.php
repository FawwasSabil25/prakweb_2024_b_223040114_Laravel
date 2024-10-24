<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Fawwas Sabil']);
});

/*2 route baru
 * blog
 * 2 artikel. judul n isi
 * contact (Email n No telp)
*/