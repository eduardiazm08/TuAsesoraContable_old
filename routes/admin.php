<?php

use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Back\SliderController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth'
], 
    function(){
        Route::get('', [DashboardController::class, 'index'])->name('escritorio');

        /* RUTAS SLIDER */
        Route::get('slider', [SliderController::class, 'index'])->name('slider');
        Route::get('slider/crear', [SliderController::class, 'create'])->name('slider.crear');
        Route::get('slider/ver', [SliderController::class, 'show'])->name('slider.ver');
        Route::get('slider/{id}/editar', [SliderController::class, 'edit'])->name('slider.editar');
        Route::post('slider', [SliderController::class, 'store'])->name('slider.guardar');
        Route::put('slider/{id}', [SliderController::class, 'update'])->name('slider.actualizar');
        Route::delete('slider/{id}/eliminar', [SliderController::class, 'destroy'])->name('slider.eliminar');
});