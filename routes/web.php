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

Route::get('/profile', [Frontcontroller::class, 'userShow'])->middleware('auth')->name('userfirstShow');

Route::get('/area-personale/{user_name}', [Frontcontroller::class, 'userShow'])->middleware('auth')->name('userShow');

Route::get('/meet-the-team', [Frontcontroller::class, 'meetTheTeam'])->name('meetTheTeam');

Route::get('/nuovo/annuncio',[AnnouncementController::class, 'createAnnouncements'])->middleware('auth')->name('announcements.create');

Route::get('/modifica/annuncio/{announcement}',[AnnouncementController::class, 'modifyAnnouncements'])->middleware('auth')->name('announcements.modify');

Route::get('/dettaglio/annuncio/{announcement}',[AnnouncementController::class, 'showAnnouncement'])->name('announcements.details');

//home revisore
Route::get('/revisor/home', [RevisorController::class,'index'])->middleware('isRevisor')->name('revisor.index');

//dashboard revisore
Route::get('/revisor/dashboard', [RevisorController::class,'dashboard'])->middleware('isRevisor')->name('revisor.dashboard');

//accetta annuncio
Route::patch('/accetta/annuncio/{announcement}',[RevisorController::class,'acceptAnnouncement'])->middleware('isRevisor')->name('revisor.accept_announcement');

//modifica annuncio
Route::patch('/modifica/annuncio/{announcement}',[RevisorController::class,'modifyAnnouncement'])->name('revisor.modify_announcement');

//rifiuta annuncio
Route::patch('/rifiuta/annuncio/{announcement}',[RevisorController::class,'rejectAnnouncement'])->middleware('isRevisor')->name('revisor.reject_announcement');

//richiedi di diventare un revisore
Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');

//rendi utente revisore
Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

Route::get('/ricerca/annuncio', [Frontcontroller::class, 'searchAnnouncement'])->name('announcement.search');

//Riporta annuncio a "to be revisioned"
Route::patch('/admin/annulla/{announcement}',[RevisorController::class,'setRevisionable'])->middleware('isRevisor')->name('revisor.set_revisionable');

// Cambio di lingua
Route::post('/lingua/{lang}', [Frontcontroller::class , 'setLanguage'])->name('setLocale');