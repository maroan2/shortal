<?php

use App\Http\Controllers\LinksController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LinksController::class, 'index']);
Route::get('/link/{links:short_url}', [LinksController::class, 'view']);
Route::post('/', [LinksController::class, 'store']);
Route::get('/{links:short_url}', [LinksController::class, 'show']);
