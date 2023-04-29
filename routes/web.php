<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\portofolioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\WebController::class, 'index']);

Auth::routes(['register' => false, 'confirm' => false]);

Route::get('/dashboard', function (){
    return view('dashboard.dashboard');
});

Route::get('/dashboard', [App\Http\Controllers\dashboard::class, 'index'])->name('dashboard.index');

Route::resource('/portfolios', App\Http\Controllers\portofolioController::class);

Route::get('/portofolios', [App\Http\Controllers\portofolioController::class, 'index'])->name('portofolios.index');

Route::get('/portofolios/create', [App\Http\Controllers\portofolioController::class, 'create'])->name('portofolios.create');

Route::post('/portofolios', [App\Http\Controllers\portofolioController::class, 'store'])->name('portofolios.store');

Route::get('/portofolios/{portofolio}', [App\Http\Controllers\portofolioController::class, 'show'])->name('portofolios.show');

Route::get('/portofolios/{portofolio}/edit', [App\Http\Controllers\portofolioController::class, 'edit'])->name('portofolios.edit');

Route::put('/portofolios/{portofolio}', [App\Http\Controllers\portofolioController::class, 'update'])->name('portofolios.update');

Route::put('/portfolios/{portfolio}', [App\Http\Controllers\portofolioController::class, 'update'])->name('portfolios.update');

Route::delete('/portofolios/{portofolio}', [App\Http\Controllers\portofolioController::class, 'destroy'])->name('portofolios.destroy');

