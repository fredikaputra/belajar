<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['tes' => 'tes'];
});

Route::get('/test', function () {
    $date = '2021-01-01';
    ddd(env('APP_URL'));
});