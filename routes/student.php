<?php

use App\Http\Controllers\testController;
use App\Http\Controllers\visitor\AllformationController;
use App\Http\Controllers\admin\student\DashboardController;
use App\Http\Controllers\admin\student\ProfileController;
use App\Http\Controllers\visitor\EnseignantesController;
use App\Http\Controllers\visitor\HomeController;
use App\Http\Controllers\visitor\PanierController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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



// Auth::routes(['verify'=>true]);

// Route::middleware(['web', config('livewire.middleware_group')])->group(function () {
//     Livewire::route();
// });

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale().'/admin/student',
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth','verified','student']
    ], function(){
        
        
        Route::group(['prefix' => 'profile'], function () {
            Route::get('/', [ProfileController::class, 'index'])->name('student.index');
        });


});



