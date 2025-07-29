<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ProductController;


Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/card', function () {
//     return CardResource::collection(Card::all());
// });

Route::get('/cards', [ProductController::class, 'card']);