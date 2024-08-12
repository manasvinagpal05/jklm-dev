<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use Illuminate\Support\Facades\Route;


    Route::get('/login', function () 
    {
        return view('admin.login');
    })->name('login');

   
    // Route::middleware(['auth'])->group(function ()
    // {
       
    // });

   