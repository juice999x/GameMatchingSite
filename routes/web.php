<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\MessageController;

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

Route::get('/fakehome', [TimelineController::class, 'fakehome']);

Route::middleware('auth')->group(function () {
    
    Route::get('/timeline', [TimelineController::class, 'index']);
    
    Route::get('/matching/message/{user}', [TimelineController::class, 'message'])->name('home');
    
    Route::get('/matching/directmessage/{user}', [TimelineController::class, 'directmessage']);
    
    Route::get('/', [MessageController::class, 'getDate']);
    
    Route::post('/add', [MessageController::class, 'add'])->name('add');
    
    Route::get('/matching/posts', [TimelineController::class, 'post']);
    
    Route::post('/timeline', [TimelineController::class, 'store']);
    
    Route::get('/matching/likes/{user}', [TimelineController::class, 'like']);
    
    Route::post('/like/{timelineId}', [LikeController::class,'store']);
    
    Route::post('/unlike/{timelineId}', [LikeController::class,'destroy']);
    
    Route::get('/matching/userprofiles/{user}', [TimelineController::class, 'profile']);
    
    Route::get('/matching/{user}/edit', [TimelineController::class, 'edit']);
    
    Route::put('/matching/edit/{user}', [TimelineController::class, 'update']);
    
    Route::get('/matching/privacy/{user}', [TimelineController::class, 'privacy']);
    
    Route::get('/logout', [TimelineController::class, 'logout']);
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
