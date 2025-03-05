<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercicios2Controller extends Controller
{
    
    public function abrirSomaDoisValores(){
        return view('exer1');
    }

    public function calcularSomaDoisValores(Request $request) {
        $valor1 = floatval($request->input('valor1'));
        $valor2 = floatval($request->input('valor2'));

        if($valor1 != $valor2) {
            $resultado = 'soma: ' . $valor1 + $valor2;
        } else {
            $resultado = 'triplo: ' . $valor1 * 3;
        }

        return view('exer1', compact('resultado'));
    }

    public function abrirCrescente(){
        return view('exer2');
    }

    public function calcularCrescente(Request $request) {
        $valor1 = floatval($request->input('valor1'));
        $valor2 = floatval($request->input('valor2'));

        $mensagem = 'Ordem Crescente: ';

        if($valor1 > $valor2) {
            $resultado = $mensagem . $valor2 . ',' . $valor1;
        } else if($valor1 < $valor2){
            $resultado = $valor1 . ',' . $valor2;
        } else {
            $mensagem = 'Números Iguais: ';
            $resultado = $mensagem . $valor1;

        }

        return view('exer2', compact('resultado'));
    }

    public function abrirDesconto(){
        return view('exer3');
    }

    public function calcularDesconto(Request $request) {
        $produto = floatval($request->input('produto'));

        if($produto > 100) {
            $resultado = $produto + ((15/100) * $produto);
        }  else {
            $resultado = $produto;

        }

        return view('exer3', compact('resultado'));
    }

    public function abrirPrimo(){
        return view('exer4');
    }

    public function calcularPrimo(Request $request) {
        $numero = floatval($request->input('numero'));

        $divisores = 0;
        $primos = 'Números primos: ';
        for($i = 2; $i <= $numero; $i ++) {

            for($j = $i; $j >= 1; $j--) {
                if($i % $j == 0) {
                    $divisores ++;
                }
            }

            if ($divisores == 2) {
                $primos .= $i . ' ';
            }

            $divisores = 0;

        }

        return view('exer4', compact('primos'));
    }

    public function abrirMes(){
        return view('exer5');
    }

    public function calcularMes(Request $request) {
        $mes = floatval($request->input('mes'));

        switch($mes) {
            case '1':
                $mes = 'Janeiro';
            break;

            case '2':
                $mes = 'Fevereiro';
            break;

            case '3':
                $mes = 'Março';
            break;

            case '4':
                $mes = 'Abril';
            break;

            case '5':
                $mes = 'Maio';
            break;

            case '6':
                $mes = 'Junho';
            break;

            case '7':
                $mes = 'Julho';
            break;

            case '8':
                $mes = 'Agosto';
            break;

            case '9':
                $mes = 'Setembro';
            break;

            case '10':
                $mes = 'Outubro';
            break;

            case '11':
                $mes = 'Novembro';
            break;

            case '12':
                $mes = 'Dezembro';
            break;

            default:
                $mes = 'Inválido';
        }
        return view('exer5', compact('mes'));
    }

    public function abrirNumeros(){
        return view('exer6');
    }

    public function calcularNumeros(Request $request) {
        $numero = floatval($request->input('numero'));

        $numeros = '';
        for($i = 1; $i <= $numero; $i ++) {
            $numeros .= $i . ' ';
        }

        return view('exer6', compact('numeros'));
    }

    public function abrirSoma(){
        return view('exer7');
    }

    public function calcularSoma(Request $request) {
        $numero = floatval($request->input('numero'));

        $numeros = 0;
        for($i = 1; $i <= $numero; $i ++) {
            $numeros += $i;
        }

        return view('exer7', compact('numeros'));
    }

    public function abrirContagem(){
        return view('exer8');
    }

    public function calcularContagem(Request $request) {
        $numero = floatval($request->input('numero'));

        $contagem = '';
        for($i = $numero; $i >= 0; $i--) {
            $contagem .= $i . ' ';
        }

        return view('exer8', compact('contagem'));
    }

    public function abrirFatorial(){
        return view('exer9');
    }

    public function calcularFatorial(Request $request) {
        $numero = floatval($request->input('numero'));

        $fatorial = 1;

        for($i = 1; $i < $numero; $i++) {
            $fatorial = $fatorial * ($numero - $i);
        }

        $fatorial = $fatorial * $numero;

        return view('exer9', compact('fatorial'));
    }

    public function abrirTabuada(){
        return view('exer10');
    }

    public function calcularTabuada(Request $request) {
        $numero = floatval($request->input('numero'));

        $tabuada = '';
        $multiplicacao = 0;
        for($i = 0; $i <= 10; $i++) {
            $multiplicacao = $i * $numero;
            $tabuada .= $i .' X '. $numero . ' = ' . $multiplicacao. '<br>';
        }

        return view('exer10', compact('tabuada'))->with('tabuada', $tabuada);

    }
}
