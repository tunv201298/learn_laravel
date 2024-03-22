<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $userdetail  =     App\Models\User::find(1);
    return view('welcome');
});
