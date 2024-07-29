<?php

Route::get('/',[\App\Http\Controllers\Admin\AdminController::class,'index'])->name('home');

//Users
Route::post('/user/{user}/login',[\App\Http\Controllers\Admin\UserController::class,'loginWithUser'])->name('user.login');
Route::get('/user',[\App\Http\Controllers\Admin\UserController::class,'index'])->name('users');
Route::get('/user/{user}',[\App\Http\Controllers\Admin\UserController::class,'show'])->name('user.show');

//News
Route::get('/news',[\App\Http\Controllers\Admin\NewsController::class,'index'])->name('news');
Route::post('/news',[\App\Http\Controllers\Admin\NewsController::class,'store'])->name('news.store');
Route::get('/news/create',[\App\Http\Controllers\Admin\NewsController::class,'create'])->name('news.create');


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

//Competiton
Route::get('/competition/{competition}',[\App\Http\Controllers\Admin\CompetitionController::class,'show']);


//Settings
Route::name('setting.')->prefix('setting')->group(function ()
{
    Route::get('/basic', [\App\Http\Controllers\Admin\SettingController::class,'basic_create'] )->name('basic');
    Route::post('/basic',[\App\Http\Controllers\Admin\SettingController::class,'basic'])->name('basic.store');
    Route::name('slider_home.')->prefix('sliders_home')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\SettingController::class,'sliders_home'])->name('index');
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
