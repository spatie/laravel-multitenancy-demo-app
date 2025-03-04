<?php

use App\Http\Controllers\ProfileController;
use App\Jobs\TestJob;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dispatch', function() {
   TestJob::dispatch();

   return view('dispatch');
});
