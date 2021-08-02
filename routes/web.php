<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeBOController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PortfolioBOController;
use App\Http\Controllers\BlogBOController;
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

// Routes Back-Office
Route::get('/backoffice',[HomeBOController::class, 'index'])->name('hombo');

// Routes Blog Back-Office
Route::get('/blog_bo', [BlogBOController::class, 'index'])->name('blog_bo');
Route::get('/createBlog', [BlogBOController::class, 'create'])->name('createBlog');
Route::post('/blogBO', [BlogBOController::class, 'store'])->name('storeBlog');
Route::delete('/blogBO/{id}/delete', [BlogBOController::class, 'destroy'])->name('deleteBlog');
Route::get('/blogBO/{id}/edit', [BlogBOController::class, 'edit'])->name('editBlog');
Route::put('/blogBO/{id}/update', [BlogBOController::class, 'update'])->name('updateBlog');

// Routes Portfolio Back-Office
Route::get('/portfolio_bo', [PortfolioBOController::class, 'index'])->name('portfolio_bo');
Route::get('/createPortfolio', [PortfolioBOController::class, 'create'])->name('createPortfolio');
Route::post('/portfolioBO', [PortfolioBOController::class, 'store'])->name('storePort');
Route::delete('/portfolioBO/{id}/delete', [PortfolioBOController::class, 'destroy'])->name('deletePortfolio');
Route::get('/portfolioBO/{id}/edit', [PortfolioBOController::class, 'edit'])->name('editPortfolio');
Route::put('/portfolioBO/{id}/update', [PortfolioBOController::class, 'update'])->name('updatePortfolio');
