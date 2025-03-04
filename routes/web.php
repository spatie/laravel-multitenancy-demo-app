<?php

use App\Http\Controllers\ProfileController;
use App\Jobs\ExampleJob;
use Illuminate\Support\Facades\Route;
use Spatie\Multitenancy\Models\Tenant;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dispatch', function() {
   ray("In route of " . Tenant::current()->name);

   ExampleJob::dispatch();

   return view('dispatch');
});
