<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AnalysisController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('addService', [ServicesController::class, 'store'])->name('addService');
Route::post('addAnalysis', [AnalysisController::class, 'store'])->name('addAnalysis');
Route::post('signup', [AuthController::class, 'signUp'])->name('signup');


