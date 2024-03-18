<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/event', function() {
    event(new \App\Events\TestEvent());
});
