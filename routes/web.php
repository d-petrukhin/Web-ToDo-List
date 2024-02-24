<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
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

Route::group(['prefix' => ''], static function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('about', [AboutController::class, 'about'])->name('about');
});

Route::middleware('auth')->group(function () {
    Route::resource('tasks', TaskController::class);
    Route::resource('folders', FolderController::class);
    Route::resource('profile', ProfileController::class);
});

Route::get('/sitemap', function () {
    return response()->file(public_path('sitemap.xml'));
})->name('sitemap');


require __DIR__.'/auth.php';
