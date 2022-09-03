<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
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
Route::get('/listing/create', [ListingController::class, 'create'])->middleware('auth');

// Store Listing Data
Route::post('/listing/create/listings', [ListingController::class, 'store'])->middleware('auth');

// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Menage listings 
Route::get('/listing/menage', [
ListingController::class, 'menage'
])->middleware('auth');


// Show Register crate form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

//Log User out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');


// Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Login in User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


