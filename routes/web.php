<?php

use App\Http\Controllers\BeerController;
use App\Http\Controllers\BreweryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BreweryController::class, 'index'])->name('breweries.index');
Route::get('/brewery/{id}/beers', [BeerController::class, 'index'])->name('beers.index');
