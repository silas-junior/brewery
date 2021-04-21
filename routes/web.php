<?php

use App\Http\Controllers\BeerController;
use App\Http\Controllers\BreweryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BreweryController::class, 'index'])->name('breweries.index');
Route::get('/brewery/{id}/beers', [BeerController::class, 'index'])->name('beers.index');
//Route::get('/breweries', [BreweryController::class, 'index'])->name('breweries.index');
//Route::post('/breweries', [BreweryController::class, 'store'])->name('breweries.store');
//Route::delete('/breweries', [BreweryController::class, 'destroy'])->name('breweries.delete');
//Route::get('/button', [BreweryController::class, 'create'])->name('button');
