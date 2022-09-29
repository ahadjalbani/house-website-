<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;

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

Route::get('/index',[DashboardController::class,'index']);

Route::get('/about',[DashboardController::class,'about'])->name('house.about');

Route::get('/service',[DashboardController::class,'service'])->name('house.service');

Route::get('/project',[DashboardController::class,'project'])->name('project.house');


Route::get('/team',[DashboardController::class,'team'])->name('team.house');

Route::get('/blog',[DashboardController::class,'blog'])->name('blog.house');

Route::get('/detail',[DashboardController::class,'detail'])->name('detail.house');


Route::get('/contact',[ContactController::class,'contact'])->name('contact.house');

Route::post('/contact',[ContactController::class,'store'])->name('store.house');



