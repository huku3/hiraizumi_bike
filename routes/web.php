<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BikeController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\ProfileController;
use App\Models\Customer;
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

Route::get('/', [CustomerController::class, 'index'])
    ->name('root')
    ->middleware('auth');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('customers', CustomerController::class)
    ->only(['index','create', 'store', 'show', 'edit', 'update', 'destroy'])
    ->middleware('auth');

Route::resource('customers', CustomerController::class)
    ->only(['create', 'store','']);

Route::get('/info', function () {
    return view('customers.info');
});

Route::get('/apply', [CustomerController::class,'apply']);
    // return view('customers.apply');

Route::post('/form', [CustomerController::class,'form']);

require __DIR__ . '/auth.php';
