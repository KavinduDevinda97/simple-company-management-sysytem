<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

Route::get('/', function () {
    return view('app');
});

Route::resource('companies', CompanyController::class);