<?php

use App\Http\Controllers\EventsController;
use App\Http\Controllers\MenuController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/events', [EventsController::class, 'getEventsWithWorkshops']);
Route::get('/futureevents', [EventsController::class, 'getFutureEventsWithWorkshops']);
Route::get('/warmupevents', [EventsController::class, 'getWarmupEventsWithWorkshops']);
Route::get('/menu', [MenuController::class, 'getMenuItems']);
