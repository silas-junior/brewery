<?php

use App\Http\Controllers\BreweryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BreweryController::class, 'index'])->name('breweries.index');
