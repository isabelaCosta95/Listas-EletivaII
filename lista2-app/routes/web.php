<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Exercicios2Controller;


Route::get('/', function () {
    return view('cabecalho');
});

Route::get('/exer1', [Exercicios2Controller::class, 'abrirSomaDoisValores']);

Route::post('/exer1resp', [Exercicios2Controller::class, 'calcularSomaDoisValores']);

Route::get('/exer2', [Exercicios2Controller::class, 'abrirCrescente']);

Route::post('/exer2resp', [Exercicios2Controller::class, 'calcularCrescente']);

Route::get('/exer3', [Exercicios2Controller::class, 'abrirDesconto']);

Route::post('/exer3resp', [Exercicios2Controller::class, 'calcularDesconto']);

Route::get('/exer4', [Exercicios2Controller::class, 'abrirPrimo']);

Route::post('/exer4resp', [Exercicios2Controller::class, 'calcularPrimo']);

Route::get('/exer5', [Exercicios2Controller::class, 'abrirMes']);

Route::post('/exer5resp', [Exercicios2Controller::class, 'calcularMes']);

Route::get('/exer6', [Exercicios2Controller::class, 'abrirNumeros']);

Route::post('/exer6resp', [Exercicios2Controller::class, 'calcularNumeros']);

Route::get('/exer7', [Exercicios2Controller::class, 'abrirSoma']);

Route::post('/exer7resp', [Exercicios2Controller::class, 'calcularSoma']);

Route::get('/exer8', [Exercicios2Controller::class, 'abrirContagem']);

Route::post('/exer8resp', [Exercicios2Controller::class, 'calcularContagem']);

Route::get('/exer9', [Exercicios2Controller::class, 'abrirFatorial']);

Route::post('/exer9resp', [Exercicios2Controller::class, 'calcularFatorial']);

Route::get('/exer10', [Exercicios2Controller::class, 'abrirTabuada']);

Route::post('/exer10resp', [Exercicios2Controller::class, 'calcularTabuada']);