<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\NewsController;
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


Route::get('/', [Controller::class, 'index'])->name('index');
Route::get('/index', [Controller::class, 'index'])->name('index');
Route::get('/about', [Controller::class, 'about'])->name('about');
Route::get('/portfolio', [Controller::class, 'portfolio'])->name('portfolio');


/*
Route::get('/pi', [Controller::class, 'pi'])->name('pi');

// Route::resource('news', NewsController::class);
//////////////////////////////////////////////
/*
Route::get('/login', [Controller::class, 'login']);
Route::post('/login', [Controller::class, 'login_post']);
*/