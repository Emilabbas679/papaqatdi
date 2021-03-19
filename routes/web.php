<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController  as Admin;
use App\Http\Controllers\Site\SiteController as Site;
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


Route::get('/', [Site::class, 'index'])->name('home');
Route::post('/', [Site::class, 'save'])->name('save')->middleware('throttle:5,1');



Route::middleware(['auth'])->prefix('/admin')->namespace('Admin')->group(function() {
    Route::get('/', [Admin::class, 'index'])->name('admin.home');
    Route::resources([
        'competitor' => '\App\Http\Controllers\Admin\CompetitorController',
    ]);
});
Auth::routes();
Route::get('/register',function(){abort(404);} )->name('register');
Route::post('/register',function(){abort(404);} );
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
