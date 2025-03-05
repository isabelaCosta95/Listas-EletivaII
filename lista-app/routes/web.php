<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciciosController;


Route::get('/', function () {
    return view('cabecalho');
});

Route::get('/exer0', [ExerciciosController::class, 'abrirFormulario']);

Route::post('/exer0resp', [ExerciciosController::class, 'calcularFormulario']);

Route::get('/exer1', [ExerciciosController::class, 'abrirMedia']);

Route::post('/exer1resp', [ExerciciosController::class, 'calcularMedia']);

Route::get('/exer2', [ExerciciosController::class, 'abrirTemperaturaC']);

Route::post('/exer2resp', [ExerciciosController::class, 'calcularTemperaturaC']);

Route::get('/exer3', [ExerciciosController::class, 'abrirTemperaturaF']);

Route::post('/exer3resp', [ExerciciosController::class, 'calcularTemperaturaF']);

Route::get('/exer4', [ExerciciosController::class, 'abrirAreaRetangulo']);

Route::post('/exer4resp', [ExerciciosController::class, 'calcularAreaRetangulo']);

Route::get('/exer5', [ExerciciosController::class, 'abrirAreaCirculo']);

Route::post('/exer5resp', [ExerciciosController::class, 'calcularAreaCirculo']);

Route::get('/exer6', [ExerciciosController::class, 'abrirPerimetroRetangulo']);

Route::post('/exer6resp', [ExerciciosController::class, 'calcularPerimetroRetangulo']);

Route::get('/exer7', [ExerciciosController::class, 'abrirPerimetroCirculo']);

Route::post('/exer7resp', [ExerciciosController::class, 'calcularPerimetroCirculo']);

Route::get('/exer8', [ExerciciosController::class, 'abrirBaseElevada']);

Route::post('/exer8resp', [ExerciciosController::class, 'calcularBaseElevada']);

Route::get('/exer9', [ExerciciosController::class, 'abrirMetroParaCentimetro']);

Route::post('/exer9resp', [ExerciciosController::class, 'calcularMetroParaCentimetro']);

Route::get('/exer10', [ExerciciosController::class, 'abrirKmParaMilha']);

Route::post('/exer10resp', [ExerciciosController::class, 'calcularKmParaMilha']);

Route::get('/exer11', [ExerciciosController::class, 'abrirIMC']);

Route::post('/exer11resp', [ExerciciosController::class, 'calcularIMC']);

Route::get('/exer12', [ExerciciosController::class, 'abrirNovoPreco']);

Route::post('/exer12resp', [ExerciciosController::class, 'calcularNovoPreco']);

Route::get('/exer13', [ExerciciosController::class, 'abrirJurosSimples']);

Route::post('/exer13resp', [ExerciciosController::class, 'calcularJurosSimples']);

Route::get('/exer14', [ExerciciosController::class, 'abrirJurosCompostos']);

Route::post('/exer14resp', [ExerciciosController::class, 'calcularJurosCompostos']);

Route::get('/exer15', [ExerciciosController::class, 'abrirConversaoHorario']);

Route::post('/exer15resp', [ExerciciosController::class, 'calcularConversaoHorario']);