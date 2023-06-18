<?php

use App\Http\Controllers\testController;
use App\Http\Controllers\visitor\AllformationController;
use App\Http\Controllers\admin\teacher\DashboardController;
use App\Http\Controllers\admin\teacher\MesFormationController;
use App\Http\Controllers\admin\teacher\DiscussionController;
use App\Http\Controllers\admin\teacher\PaiementsController;
use App\Http\Controllers\admin\teacher\EmploiTempController;
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
        'prefix' => LaravelLocalization::setLocale() . '/admin/teacher',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth', 'verified', 'teacher']
    ],
    function () {


        Route::group(['prefix' => 'dashboard'], function () {
            Route::get('/', [DashboardController::class, 'dashboard'])->name('teacher.dashboard');
        });

        Route::group(['prefix' => 'mesforamtions'], function () {
            Route::get('/', [MesFormationController::class, 'index'])->name('mesformations.index');
            Route::get('/plan', [MesFormationController::class, 'plan'])->name('mesformations.plan');
            Route::get('/class', [MesFormationController::class, 'class'])->name('mesformations.class');
        });

        Route::group(['prefix' => 'discussion'], function () {
            Route::get('/', [DiscussionController::class, 'index'])->name('discussion.index');
        });


        Route::group(['prefix' => 'paiment'], function () {
            Route::get('/', [PaiementsController::class, 'index'])->name('paiment.index');
        });

        Route::group(['prefix' => 'emploitemp'], function () {
            Route::get('/', [EmploiTempController::class, 'index'])->name('emploitemp.index');
        });
    }
);
