<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-z]{2}'],
], function () {
    
    Route::prefix('admin')->group(function (){
        Route::get('/dashboard', [App\Http\Controllers\AdminController\AdminController::class, 'dashboard']);
    });  
    
});
