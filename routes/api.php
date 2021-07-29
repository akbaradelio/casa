<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\v1\SchoolClassController;
use App\Http\Controllers\API\v1\SchoolMajorController;
use App\Http\Controllers\API\v1\AdministratorController;
use App\Http\Controllers\API\v1\CashTransactionController;
use App\Http\Controllers\API\v1\DashboardChartController;
use App\Http\Controllers\API\v1\StudentController;

Route::name('api.')->prefix('v1')->group(function () {
    Route::get('/class/{id}', SchoolClassController::class)->name('class.show');
    Route::get('/student/{id}', StudentController::class)->name('student.show');
    Route::get('/major/{id}', SchoolMajorController::class)->name('major.show');
    Route::get('/administrator/{id}', AdministratorController::class)->name('administrator.show');
    Route::get('/cash-transaction/{id}', CashTransactionController::class)->name('cash-transaction.show');

    Route::get('/chart', DashboardChartController::class)->name('chart');
});
