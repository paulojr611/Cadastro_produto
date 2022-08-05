<?php

use App\Http\Controllers\listController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get("ping", function(){
    return "Conexão ok";
}); 

Route::get("/busca",[listController::class,"Busca"]);
Route::get("/busca/{product}",[listController::class,"Busca_id"]);
Route::post("/criar",[listController::class,"Criar"]);
Route::post("/Editar/{product}",[listController::class,"Editar"]);
Route::delete("/Deletar/{product}",[listController::class,"Deletar"]);
Route::get("/cidades",[listController::class,"Cidades"]);

Route::post("/tom/{product}",[listController::class,"Editar"]);