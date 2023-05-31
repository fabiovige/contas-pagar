<?php

use App\Http\Controllers\SupplierController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankAccountController;

Route::middleware('auth:sanctum')->get('/user', function () {
    return User::all();
});

Route::prefix('v1')->group(function () {
    Route::middleware('auth:sanctum')->group(function () {
        Route::apiResource('/suppliers', SupplierController::class);
        Route::apiResource('/bank_accounts', BankAccountController::class);
    });
});
