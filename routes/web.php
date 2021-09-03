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

Route::redirect('/', config('app.locale'));

Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-z]{2}'],
], function () {
    
    Route::get('/', [App\Http\Controllers\UserController\TeaController::class, 'index']);
    Route::get('/login', [App\Http\Controllers\UserController\TeaController::class, 'login'])->name('login');
    Route::get('/contact-us', [App\Http\Controllers\UserController\TeaController::class, 'contactUs'])->name('contact-us');
    
});

require __DIR__.'/admin.php';
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
