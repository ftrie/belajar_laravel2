<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\DataController;

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

Route::get('/beranda', [DataController::Class, 'beranda']);
Route::get('/data', [DataController::Class, 'data']);