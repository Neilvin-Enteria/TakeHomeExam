<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SubAgentController;
use Illuminate\Support\Facades\Route;


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

Route::resource('main', PageController::class);
Route::resource('agents', AgentController::class);
Route::resource('subagents', SubAgentController::class);