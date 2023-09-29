<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SectorController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('dashboard', function ()
{
    return view('/dashboard');

});*/


//Auth::routes();

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function(){
Route::get('/product', [ProductController::class, 'index'])->name('product/index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product/create');
Route::get('/product/store',  [ProductController::class, 'store'])->name('product/store');
});

Route::middleware('auth')->group(function()
{
    Route::get('/sector', [SectorController::class, 'index'])->name('sector/index');
    Route::get('/sector/create', [SectorController::class, 'create'])->name('sector/create');
    Route::get('/sector/store', [SectorController::class, 'store'])->name('sector/store');

});





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__ . '/auth.php';
