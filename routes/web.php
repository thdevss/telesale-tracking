<?php

use Illuminate\Support\Facades\Route;

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
    return to_route('user.dashboard');
});


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

    
});


require __DIR__.'/auth.php';
