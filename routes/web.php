<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/demo-site/index');
});

Route::post('/demo-site/contact/complete', function () {
    // POSTデータの処理をここに記載します
    return view('demo-site/contact.complete'); // 完了ページを表示
});