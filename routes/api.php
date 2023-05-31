<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * Listagem de usuários
 * 
 * Retorna todos os usuários cadastrados
 * @responseFile Response/UserList.json
 */
Route::middleware('auth:sanctum')->get('/user', function () {
    return User::all();
});
