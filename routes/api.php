<?php

use App\Http\Controllers\LeadsController;
use App\Http\Middleware\ApiTokenMiddleware;
use Illuminate\Support\Facades\Route;


Route::middleware(['api.token'])->group(function(){
    Route::post('leads', [LeadsController::class, 'create']);
});