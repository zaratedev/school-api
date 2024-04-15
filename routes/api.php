<?php

use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\StudentSubjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('students/{number}', [StudentController::class, 'show']);
Route::post('students/subscribe', [StudentSubjectController::class, 'store']);
Route::post('students/unsubscribe', [StudentSubjectController::class, 'destroy']);
