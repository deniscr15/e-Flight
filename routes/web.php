<?php

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
    return redirect('/home');
});

Auth::routes();


// 
// Route::prefix('obedience')->as('obedience.')->group(function () {

// 	Route::get('/', Obedience::class)->name('obedience.index');
// 	Route::get('/create', CreateObedience::class)->name('obedience.create');
// 	Route::get('/edit', EditObedience::class)->name('obedience.edit');

// });

Route::middleware(['auth'])->group(function () {
	Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 	Route::resource('routes', '\App\Http\Controllers\MasterData\RouteController');
	Route::resource('operators', '\App\Http\Controllers\MasterData\OperatorController');
	Route::resource('aircraft-types', '\App\Http\Controllers\MasterData\AircraftTypeController');

	Route::resource('flights', '\App\Http\Controllers\FlightController');

 	//
 	Route::resource('doctors', '\App\Http\Controllers\DoctorController');
 	Route::resource('patients', '\App\Http\Controllers\PatientController');
 	Route::resource('schedules', '\App\Http\Controllers\ScheduleController');
 	Route::resource('transactions', '\App\Http\Controllers\TransactionController');
 	Route::resource('articles', '\App\Http\Controllers\ArticleController');

	//custom schedule
	Route::get('/doctors/schedule/{id}', [\App\Http\Controllers\ScheduleController::class, 'schedule'])->name('doctor.schedules');
	Route::post('/doctors/schedule/store', [\App\Http\Controllers\ScheduleController::class, 'store_custom'])->name('doctor.schedules.store');
	
	//custom transaction
	Route::get('/schedule-list', [\App\Http\Controllers\TransactionController::class, 'get_schedule'])->name('doctor.schedules.list');
});