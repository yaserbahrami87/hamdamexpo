<?php

Route::get('/',function ()
{
    return view('user.index');
})->name('home');

Route::get('/competition',\App\Http\Livewire\User\Competitions::class)->name('competition.show');
