<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\Frontcontroller;
use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Fortify;

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

Route::get('/', [Frontcontroller::class, 'welcome'])->name('welcome');
Route::get('/categoria/{category}', [Frontcontroller::class, 'categoryShow'])->name('categoryShow');

Route::get('/nuovo/annuncio',[AnnouncementController::class, 'createAnnouncements'])->middleware('auth')->name('announcements.create');
Route::get('/dettaglio/annuncio/{latestAnnouncement}',[AnnouncementController::class, 'showAnnouncement'])->name('announcements.details');

Route::get('/revisor/home', [RevisorController::class,'index'])->name('revisor.index');
Route::patch('/accetta/annuncio/{announcement}',[RevisorController::class,'acceptAnnouncement'])->name('revisor.accept_announcement');
Route::patch('/rifiuta/annuncio/{announcement}',[RevisorController::class,'rejectAnnouncement'])->name('revisor.reject_announcement');