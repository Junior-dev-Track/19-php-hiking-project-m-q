<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

$idRegex = '[0-9]+';
$slugRegex = '[a-z0-9\-]+';
Route::get('/', [HomeController::class, 'index']);
Route::get('/randos', [\App\Http\Controllers\HikeController::class, 'index'])->name('hike.index');
Route::get('/randos/{slug}-{hike}', [\App\Http\Controllers\HikeController::class, 'show'])->name('hike.show')->where([
    'hike' => $idRegex,
    'slug' => $slugRegex
]);
Route::post('/randos/{hike}/contact', [\App\Http\Controllers\HikeController::class, 'contact'])->name('hike.contact')->where([
    'hike' => $idRegex
]);


Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'doLogin']);
Route::delete('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('hike', \App\Http\Controllers\Admin\HikeController::class)->except(['show']);
    Route::resource('option', \App\Http\Controllers\Admin\OptionController::class)->except(['show']);
});

Route::get('/about', function () {
    return view('hike.about');
});
