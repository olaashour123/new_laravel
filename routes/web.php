<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;

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


//portfolio routs
Route::prefix('portfolio')->name('portfolio.')->group(function() {

Route::get('/',[PortfolioController::class,'index'])->name('index');
Route::get('/about',[PortfolioController::class,'about'])->name('about');
Route::get('/contact',[PortfolioController::class,'contact'])->name('contact');
Route::get('/services',[PortfolioController::class,'services'])->name('services');

});

Route::get('/show',[pagesController::class,'show'])->name('show');

Route::get('/home',[pagesController::class,'home'])->name('home');

Route::get('/about',[pagesController::class,'about'])->name('about');

Route::get('/contact',[pagesController::class,'contact'])->name('contact');

Route::get('/services',[pagesController::class,'services'])->name('services');
Route::get('/team',[pagesController::class,'team'])->name('team');


Route::get('/', function () {
    return view('welcome');
});

