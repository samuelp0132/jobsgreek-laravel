<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

// All Listings
Route::get('/', [ListingController::class, 'index']);

// Single Listing
Route::get('/listing/{listing}', [ListingController::class,'show']);

// Show create form
Route::get('/listings/create', [ListingController::class, 'create']);

// Show create form
Route::post('/listings', [ListingController::class, 'store']);