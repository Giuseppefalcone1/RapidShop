<?php

use App\Http\Controllers\AnnouncementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


Route::get('/',[PublicController::class, 'home'])->name('welcome');


Route::get('/announcement/create',[AnnouncementController::class,'create'])->name('announcement.create');