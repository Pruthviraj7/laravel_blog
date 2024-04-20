<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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
Route::get(
    'topics',
    [TopicController::class,'index']
)->name('course.index');

Route::get('/', function () {
    return view('welcome');
});

Route::resource('blogs',BlogController::class);
Route::get('blogs/trash/{id}',[BlogController::class, 'trash'])->name('blogs.trash')->middleware(['auth','verified']);
Route::get('blogs/trashed/',[BlogController::class, 'trashed'])->name('blogs.trashed')->middleware(['auth','verified']);
Route::get('blogs/restore/{id}',[BlogController::class, 'restore'])->name('blogs.restore')->middleware(['auth','verified']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
