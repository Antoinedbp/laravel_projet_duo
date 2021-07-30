<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeBOController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::get('/Portoflio',[PortfolioController::class,'index'])->name('portoflio');
Route::get('/backoffice',[HomeBOController::class, 'index'])->name('hombo');
Route::get('/blog_bo', [BlogBOController::class, 'index'])->name('blog_bo');
Route::get('/portfolio_bo', [PortfolioBOController::class, 'index'])->name('portfolio_bo');

