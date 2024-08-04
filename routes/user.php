<?php

Route::get('/',function ()
{
    return view('user.index');
})->name('home');

Route::get('/competition/{competition}',[\App\Http\Controllers\User\CompetitionController::class,'edit'])->name('competition.edit');
Route::patch('/competition/{competition}',[\App\Http\Controllers\User\CompetitionController::class,'update'])->name('competition.update');
Route::delete('/competition/{competition}',[\App\Http\Controllers\User\CompetitionController::class,'destroy'])->name('competition.delete');
Route::namespace('\\App\\Http\\Livewire\\')->group(function()
{
    Route::get('/competition',User\Competitions::class)->name('competition.show');
});


