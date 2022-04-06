<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradesController;

Route::get('begin', [GradesController::class, 'begin']);
Route::post('enter-grades', [GradesController::class, 'enterGrades']);
Route::post('compute-grades', [GradesController::class, 'computeGrades']);
