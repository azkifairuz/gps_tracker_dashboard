<?php

use App\Http\Controllers\RoutingController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::group(['prefix' => '/', 'middleware' => 'auth'], function () {
    Route::get('', [RoutingController::class, 'index'])->name('root');
    Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
    Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
    Route::get('{any}', [RoutingController::class, 'root'])->name('any');
});
Route::view('/consumable', 'gps_tracker.consumeable.index');
Route::view('/asset', 'gps_tracker.asset.index');
Route::view('/dashboard', 'gps_tracker.dashboard.index')->name("dashboard");
Route::view('/depresiasi', 'gps_tracker.depresiasi.index');
Route::view('/important-note', 'gps_tracker.important_note.index');
Route::view('/pakar-ai', 'gps_tracker.pakar_ai.index');
