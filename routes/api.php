<?php

use App\Http\Controllers\QuoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("quotes", [QuoteController::class, "api_five"])->name("api.quote.five");
Route::get("quotes/new", [QuoteController::class, "api_five_new"])->name("api.quote.five-new");
Route::get("secure-quotes", [QuoteController::class, "api_ten"])->name("api.quote.ten");
Route::get("secure-quotes/new", [QuoteController::class, "api_ten_new"])->name("api.quote.ten-new");
