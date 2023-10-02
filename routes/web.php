<?php

use App\Http\Controllers\LogController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

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

// Route::get('logs', function () {

//     $logs = DB::table('logs')->get();

//     return view('logs', ['logs' => $logs]);
// });

Route::get('logs',[LogController::class, 'getAll']);
// View::make('logs', []);