<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
/* use App\Http\Controllers\ListingContoller; */

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// All listing
Route::get('/', [ListingController::class, 'index']);


// Show Crate Form
Route::get('/listing/create', [ListingController::class, 'create']);

// Store listing data
Route::post('/listing/create/listings', [ListingController::class, 'store']);


// Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);


