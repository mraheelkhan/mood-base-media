<?php

use App\Http\Controllers\MediaController;
use App\Http\Controllers\MoodController;
use App\Http\Controllers\UserPlaylistController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->as('admin.')->middleware('auth')->group(function(){
    Route::resource('moods', MoodController::class);
    Route::resource('medias', MediaController::class);
    Route::resource('playlists', UserPlaylistController::class);
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
