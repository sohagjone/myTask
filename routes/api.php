<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProjectsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::apiResource('projects', 'API\ProjectsController');
//Route::apiResource('projects', [App\Http\Controllers\API\ProjectsController::class, 'index']);
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::apiResource('tasks', 'API\TasksController');
//Route::apiResource('tasks', 'API\TaskController');
//Route::apiResource('projects', [ProjectsController::class, 'index']);
