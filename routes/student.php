<?php

use App\Http\Controllers\admin\student\ApprentissageController;
use App\Http\Controllers\testController;
use App\Http\Controllers\visitor\AllformationController;
use App\Http\Controllers\admin\student\DashboardController;
use App\Http\Controllers\admin\student\ProfileController;
use App\Http\Controllers\admin\student\EmploiController;
use App\Http\Controllers\admin\student\GroupChatController;
use App\Http\Controllers\admin\student\ProfChatController;
use App\Http\Controllers\admin\student\PaiementsController;
use App\Http\Controllers\admin\student\AttestationController;
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
        'prefix' => LaravelLocalization::setLocale() . '/admin/student',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth', 'verified', 'student']
    ],
    function () {

        Route::group(['prefix' => 'profile'], function () {
            Route::get('/', [ProfileController::class, 'index'])->name('student.index');
        });

        Route::group(['prefix' => 'apprentissage'], function () {
            Route::get('/', [ApprentissageController::class, 'index'])->name('apprentissage.index');
            Route::get('/detail', [ApprentissageController::class, 'detail'])->name('apprentissage.detail');
            Route::get('/vide', [ApprentissageController::class, 'vide'])->name('apprentissage.vide');
        });

        Route::group(['prefix' => 'groupchat'], function () {
            Route::get('/', [GroupChatController::class, 'index'])->name('groupchat.index');
        });

        Route::group(['prefix' => 'profchat'], function () {
            Route::get('/', [ProfChatController::class, 'index'])->name('profchat.index');
        });

        Route::group(['prefix' => 'paiements'], function () {
            Route::get('/', [PaiementsController::class, 'index'])->name('paiements.index');
        });

        Route::group(['prefix' => 'attestation'], function () {
            Route::get('/', [AttestationController::class, 'index'])->name('attestation.index');
        });

        Route::group(['prefix' => 'emploi'], function () {
            Route::get('/', [EmploiController::class, 'index'])->name('emploi.index');
        });
    },

);
