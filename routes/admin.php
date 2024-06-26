<?php

Route::get('/',[\App\Http\Controllers\Admin\AdminController::class,'index']);

//festivals
Route::prefix('festival')->group(function()
{
    Route::get('/',[\App\Http\Controllers\Admin\FestivalController::class,'index'])->name('festival.index');
    Route::post('/',[\App\Http\Controllers\Admin\FestivalController::class,'store'])->name('festival.store');
    Route::get('/create',[\App\Http\Controllers\Admin\FestivalController::class,'create'])->name('festival.create');
    Route::get('/{festival}/edit',[\App\Http\Controllers\Admin\FestivalController::class,'edit'])->name('festival.edit');
    Route::patch('/{festival}',[\App\Http\Controllers\Admin\FestivalController::class,'update'])->name('festival.update');
});

//Pillars

Route::prefix('pillar')->group(function()
{
    Route::get('/',[\App\Http\Controllers\Admin\PillarController::class,'index'])->name('pillar.index');
    Route::post('/',[\App\Http\Controllers\Admin\PillarController::class,'store'])->name('pillar.store');
    Route::get('/create',[\App\Http\Controllers\Admin\PillarController::class,'create'])->name('pillar.create');
    Route::get('/{pillar}/edit',[\App\Http\Controllers\Admin\PillarController::class,'edit'])->name('pillar.edit');
    Route::patch('/{pillar}',[\App\Http\Controllers\Admin\PillarController::class,'update'])->name('pillar.update');
    Route::delete('/{pillar}',[\App\Http\Controllers\Admin\PillarController::class,'destroy'])->name('pillar.delete');
});




//Settings
Route::prefix('setting')->group(function ()
{
    Route::get('/basic', [\App\Http\Controllers\Admin\SettingController::class,'basic_create'] )->name('setting.basic');
    Route::post('/basic',[\App\Http\Controllers\Admin\SettingController::class,'basic'])->name('setting.basic.store');
    Route::prefix('sliders_home')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\SettingController::class,'sliders_home']);
        Route::post('/',[\App\Http\Controllers\Admin\SettingController::class,'sliders_home_store']);
        Route::get('/{setting}/edit', [\App\Http\Controllers\Admin\SettingController::class,'sliders_home_edit']);
        Route::patch('/{setting}', [\App\Http\Controllers\Admin\SettingController::class,'sliders_home_update']);
        Route::delete('/{setting}', [\App\Http\Controllers\Admin\SettingController::class,'sliders_home_destory']);
    });

    Route::prefix('colleagues')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\SettingController::class,'colleagues']);
        Route::post('/', [\App\Http\Controllers\Admin\SettingController::class,'colleagues_store']);
        Route::get('/{setting}/edit', [\App\Http\Controllers\Admin\SettingController::class,'colleagues_edit']);
        Route::patch('/{setting}', [\App\Http\Controllers\Admin\SettingController::class,'colleagues_update']);
        Route::delete('/{setting}', [\App\Http\Controllers\Admin\SettingController::class,'colleagues_destory']);
    });

});
