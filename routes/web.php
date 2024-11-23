<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post('/contact/complete', function () {
    // POSTデータの処理をここに記載します
    return view('contact.complete'); // 完了ページを表示
});