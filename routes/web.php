<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('company.auth.login');
});

