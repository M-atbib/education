<?php

use App\Events\SaveFormationEvent;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\testController;
use App\Http\Controllers\visitor\AllformationController;
use App\Http\Controllers\visitor\EnseignantesController;
use App\Http\Controllers\visitor\HomeController;
use App\Http\Controllers\visitor\PanierController;
use App\Models\Save;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;


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



Auth::routes(['verify'=>true]);

// Route::middleware(['web', config('livewire.middleware_group')])->group(function () {
//     Livewire::route();
// });
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/formations', [AllformationController::class, 'index'])->name('formations.index');
Route::get('/enseignantes', [EnseignantesController::class, 'index'])->name('enseignantes.index');
Route::get('/detail-teacher/{id}', [EnseignantesController::class, 'detail_teacher'])->name('detail-teacher');
Route::get('/formation-detail/{id}', [AllformationController::class, 'detail_formation'])->name('detail-formation');
Route::get('/panier', [PanierController::class, 'index'])->name('panier.index')->middleware('auth');
Route::get('logout', [LoginController::class,'logout'])->name('logout');

