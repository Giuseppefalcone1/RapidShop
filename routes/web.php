<?php

use App\Http\Controllers\AnnouncementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

// rotte pubbliche
Route::get('/',[PublicController::class, 'home'])->name('welcome');
Route::get('/announcement/show/{announcement}',[PublicController::class, 'show'])->name('announcement.show');
Route::get('/announcement/index', [AnnouncementController::class, 'index'])->name('announcement.index');


// rotte private
Route::middleware(['auth'])->group(function(){
    Route::get('/announcement/create',[AnnouncementController::class,'create'])->name('announcement.create');
});