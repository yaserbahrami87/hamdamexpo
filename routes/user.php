<?php

Route::get('/',function ()
{
    return view('user.index');
})->name('home');

Route::namespace('\\App\\Http\\Livewire\\')->group(function()
{
    Route::get('/competition',User\Competitions::class)->name('competition.show');
});


