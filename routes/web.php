<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

//Route::get('/', function () {
//    return Inertia::render('master.index', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//});

route::get('/',[\App\Http\Controllers\HomeController::class,'index']);


//Call
Route::get('/call',[\App\Http\Controllers\CallController::class,'show']);

//Gallery
Route::get('/gallery/{festival}',[\App\Http\Controllers\GalleryController::class,'show']);

//pillars
Route::get('/pillars/{festival}',[\App\Http\Controllers\PillarController::class,'show']);

route::get('/news',function()
{
    return view('news');
})->name('news');





route::get('/contact',function()
{
    return view('contact');
})->name('contact');

require __DIR__.'/auth.php';


Route::get('/migrate',function()
{
    Artisan::call('migrate');
    return "Migration";
});



Route::get('/clear_cache',function()
{
    Artisan::call('cache:clear');
    return "Clear cache";
});
