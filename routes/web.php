<?php

use App\Http\Controllers\AdminController;
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



Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/logout', [AdminController::class, 'logout']);
Route::post('/admin/login', [AdminController::class, 'login_post']);

Route::get('/admin/redSite', [AdminController::class, 'redSite'])->name('redSite');
Route::post('/admin/redSite', [AdminController::class, 'redSite_post']);

Route::get('/admin/portfolio/all', [AdminController::class, 'portfolio_all'])->name('portfolio.all');
Route::get('/admin/portfolio/edit/{id}', [AdminController::class, 'edit_portfolio']);
Route::post('/admin/portfolio/edit/{id}', [AdminController::class, 'edit_portfolio_post'])->name('portfolio.edit');
Route::get('/admin/portfolio/destroy/{id}', [AdminController::class, 'portfolio_destroy'])->name('portfolio.destroy');


Route::get('/admin/portfolio/add', [AdminController::class, 'add_portfolio']);
Route::post('/admin/portfolio/add', [AdminController::class, 'add_portfolio_post'])->name('portfolio.add');

/*
Route::get('/pi', [Controller::class, 'pi'])->name('pi');

Route::resource('news', NewsController::class);
//////////////////////////////////////////////
/*
Route::get('/login', [Controller::class, 'login']);
Route::post('/login', [Controller::class, 'login_post']);
*/