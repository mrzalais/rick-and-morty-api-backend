<?php

use App\Http\Controllers\Api\V1\CharacterController;
use Illuminate\Support\Facades\Route;

Route::get('/characters', [CharacterController::class, 'getCharacters']);
Route::get('/character/{id}', [CharacterController::class, 'viewCharacter']);
