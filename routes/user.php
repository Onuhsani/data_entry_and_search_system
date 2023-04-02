<?php

use App\Http\Controllers\RecordController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/records', [RecordController::class, 'index'])->name('record.index');
Route::get('/add-record', [RecordController::class, 'create'])->name('record.create');
Route::post('/add-record', [RecordController::class, 'store'])->name('record.store');
Route::get('/search', [SearchController::class, 'searchPage'])->name('record.searchPage');
Route::post('/search', [SearchController::class, 'search'])->name('record.search');
Route::get('/transfer-records', [RecordController::class, 'transferRecords'])->name('record.transferRecords');