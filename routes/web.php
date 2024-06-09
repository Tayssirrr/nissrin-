<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoitureController;
use App\Http\Controllers\ReseverController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [VoitureController::class,'index'])->name('home');
Route::get('/reserver/{voiture}',[VoitureController::class,'reserver'])->name('reserver');

Route::post('/confirmerReserv/{voiture}',[ReseverController::class,'store'])->name('confirmerReserv');

Route::prefix('/admin')->group(function () {
    Route::get('/',[VoitureController::class,'table'])->name('table');
    Route::get('/create',[VoitureController::class,'create'])->name('create');
    Route::get('/edit/{voiture}',[VoitureController::class,'edit'])->name('edit');
    Route::put('/update/{voiture}',[VoitureController::class,'update'])->name('update');
    Route::post('/add',[VoitureController::class,'store'])->name('add');
    Route::delete('/delete/{voiture}',[VoitureController::class,'destroy'])->name('delete');
    Route::get('/reserver',[ReseverController::class,'index'])->name('tablers');
    Route::delete('/deleteresr/{resever}',[ReseverController::class,'destroy'])->name('d_reser');
    Route::get('/download-image/{filename}', [ReseverController::class, 'downloadImage'])->name('downloadImage');


});

require __DIR__.'/auth.php';
