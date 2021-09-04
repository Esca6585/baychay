<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
*/

Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-z]{2}'],
], function () {
    
    Route::prefix('admin')->group(function (){
        Route::get('/dashboard', [App\Http\Controllers\AdminControllers\Dashboard\DashboardController::class, 'index'])->name('admin.dashboard');

        Route::get('/tea/getdata/{pagination}', [App\Http\Controllers\AdminControllers\Tea\TeaController::class, 'getData'])->name('tea.getdata');
        
        Route::resources([
            '/tea' => App\Http\Controllers\AdminControllers\Tea\TeaController::class,
        ]);
    });

    
    
});
