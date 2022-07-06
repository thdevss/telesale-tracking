<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AdminCampaignController;
use \App\Http\Controllers\AdminCustomerController;

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

Route::get('/', function () {
    // return view('welcome');
    return to_route('dashboard');
});

Route::get('/dashboard', function () {
    // return view('welcome');
    if(Auth::user()->role === 'admin') {
        return to_route('admin.dashboard');
    }

    return to_route('user.dashboard');
})->name('dashboard');

Route::prefix('user')->middleware(['auth'])->name('user.')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/campaign', function () {
        return view('campaign');
    })->name('campaign');

});

Route::prefix('admin')->middleware(['auth', 'isadmin'])->name('admin.')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('campaign')->name('campaign.')->group(function () {
        Route::get('/', [AdminCampaignController::class, 'index'])->name('index');
        
        Route::get('/{campaign}/report', [AdminCampaignController::class, 'report_summary'])->name('report');
        Route::get('/{campaign}/report/list', [AdminCampaignController::class, 'report_list'])->name('report.list');


        Route::get('/add', [AdminCampaignController::class, 'add'])->name('add');
        Route::post('/add', [AdminCampaignController::class, 'store'])->name('store');


        Route::get('/{campaign}', [AdminCampaignController::class, 'edit'])->name('edit');
        Route::put('/{campaign}', [AdminCampaignController::class, 'update'])->name('update');


        Route::delete('/{campaign}', [AdminCampaignController::class, 'destroy'])->name('destroy');

    });


    

    Route::prefix('customer')->name('customer.')->group(function () {
        Route::get('/', [AdminCustomerController::class, 'index'])->name('index');
        
        // Route::get('/{campaign}/report', [AdminCampaignController::class, 'report_summary'])->name('report');
        // Route::get('/{campaign}/report/list', [AdminCampaignController::class, 'report_list'])->name('report.list');


        Route::get('/add', [AdminCustomerController::class, 'add'])->name('add');
        Route::post('/add', [AdminCustomerController::class, 'store'])->name('store');


        Route::get('/{customer}', [AdminCampaignController::class, 'edit'])->name('edit');
        // Route::put('/{campaign}', [AdminCampaignController::class, 'update'])->name('update');


        // Route::delete('/{campaign}', [AdminCampaignController::class, 'destroy'])->name('destroy');

    });

});


require __DIR__.'/auth.php';
