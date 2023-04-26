<?php

use App\Events\SaveFormationEvent;
use App\Http\Controllers\testController;
use App\Http\Controllers\visitor\AllformationController;
use App\Http\Controllers\admin\superadmin\DashboardController;
use App\Http\Controllers\visitor\EnseignantesController;
use App\Http\Controllers\visitor\HomeController;
use App\Http\Controllers\visitor\PanierController;
use App\Models\Save;
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
        'prefix' => LaravelLocalization::setLocale().'/admin',
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth','verified','admin']
    ], function(){
       
        
        Route::group(['prefix' => 'dashboard'], function () {
            Route::get('/', [DashboardController::class, 'dashboard'])->name('admin.dashboard');  
        });


});



