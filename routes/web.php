<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {return view('site.home');});
Auth::routes();

include(__DIR__ . '/admin/admin.php');


