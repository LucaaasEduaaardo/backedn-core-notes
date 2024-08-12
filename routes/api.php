<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ColorController;


Route::get('welcome', function () {
    return response()->json(['message' => 'Bem-vindo à API!'], 200);
});
Route::get('colors/first', [ColorController::class, 'firstColor']);

Route::apiResource('notes', NoteController::class);
Route::apiResource('colors', ColorController::class);
