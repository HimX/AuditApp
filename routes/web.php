<?php

use App\Http\Controllers\AuditPlanController;
use App\Http\Controllers\AuditPlanTypeController;
use App\Http\Controllers\DashboardController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });

//    Route::controller(AuditPlanTypeController::class)->name('audit_plan_types.')->group(function () {
//        Route::get('/audit_plan_types', 'index')->name('index');
//        Route::get('/audit_plan_types/{planType}', 'show')->name('show');
//        Route::get('/audit_plan_types/create', 'create')->name('create');
//        Route::put('/audit_plan_types/{planType}', 'update')->name('update');
//        Route::post('/audit_plan_types', 'store')->name('store');
//    });

    Route::resource('audit_plan_types', AuditPlanTypeController::class);

    Route::resource('audit_plans', AuditPlanController::class);
});
