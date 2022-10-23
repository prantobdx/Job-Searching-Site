<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[FrontEndController::class,'index'])->name('/');

Route::get('/about',[FrontEndController::class,'aboutUs'])->name('about');
Route::get('/contact',[FrontEndController::class,'contactUs'])->name('contact');
Route::get('/candidate',[FrontEndController::class,'candidate'])->name('candidate');
Route::get('/resume',[FrontEndController::class,'resume'])->name('resume');

Route::get('/job-board',[JobController::class,'jobBoard'])->name('job-board');
Route::get('/single-job',[JobController::class,'singleJob'])->name('single-job');
Route::get('/job-details',[JobController::class,'jobDetails'])->name('job-details');

Route::get('/blog',[BlogController::class,'blog'])->name('blog');
Route::get('/blog-details',[BlogController::class,'blogDetails'])->name('blog-details');




Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
//    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');


});
