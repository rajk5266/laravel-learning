<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RestoController;
use App\Models\Restaurant;

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

// Route::get('/', function () {
//     return 'welcome';
// });


Route::get('/', [RestoController::class, 'index']);

Route::get('/list', [RestoController::class, 'list']);

Route::post('/add', [RestoController::class, 'add']);

Route::view('add', 'add');

Route::get('/delete/{id}', [RestoController::class, 'delete']);

Route::get('/edit/{id}', [RestoController::class, 'edit']);

Route::post('edit', [RestoController::class, 'update']);

Route::view('register', 'register');

Route::post('register', [RestoController::class, 'register']);

