<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Card;
use App\Http\Resources\CardResource;


Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/card', function () {
    return CardResource::collection(Card::all());
});