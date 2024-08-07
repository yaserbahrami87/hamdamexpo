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

route::get('/news',[\App\Http\Controllers\NewsController::class,'index'])->name('news.all');
route::get('/news/{news}',[\App\Http\Controllers\NewsController::class,'show'])->name('news.show');


//contact US
Route::get('/contactUs/create',[\App\Http\Controllers\ContactUsController::class,'create']);
Route::post('/contactUs',[\App\Http\Controllers\ContactUsController::class,'store']);



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
