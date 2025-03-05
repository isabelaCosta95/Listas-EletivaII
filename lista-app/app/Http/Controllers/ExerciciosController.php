<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    
    public function abrirFormulario(){
        return view('exer0');
    }

    public function calcularFormulario(Request $request) {
        $valor1 = intval($request->input('valor1'));
        $valor2 = intval($request->input('valor2'));

        $soma = $valor1 + $valor2;

        return view('exer0', compact('soma'));
    }


    public function abrirMedia(){
        return view('exer1');
    }

    public function calcularMedia(Request $request) {
        $nota1 = intval($request->input('nota1'));
        $nota2 = intval($request->input('nota2')); 
        $nota3 = intval($request->input('nota3')); 

        $media = ($nota1 + $nota2 + $nota3) / 3;

        return view('exer1', compact('media'));
    }


    public function abrirTemperaturaC(){
        return view('exer2');
    }

    public function calcularTemperaturaC(Request $request) {
        $celsius = intval($request->input('temperaturaC'));

        $temperaturaF = ($celsius * 9/5) + 32;

        return view('exer2', compact('temperaturaF'));
    }

    public function abrirTemperaturaF(){
        return view('exer3');
    }

    public function calcularTemperaturaF(Request $request) {
        $fahrenheit = intval($request->input('temperaturaF'));

        $temperaturaC = ($fahrenheit - 32) * 5/9;

        return view('exer3', compact('temperaturaC'));
    }

    
    public function abrirAreaRetangulo() {
        return view('exer4');
    }

    public function calcularAreaRetangulo(Request $request) {
        $largura = intval($request->input('largura'));
        $altura = intval($request->input('altura'));

        $area = $largura * $altura;

        return view('exer4', compact('area'));
    }


    public function abrirAreaCirculo() {
        return view('exer5');
    }

    public function calcularAreaCirculo(Request $request) {
        $raio = floatval($request->input('raio'));

        $area = 3.14 * ($raio * $raio);

        return view('exer5', compact('area'));
    }


    public function abrirPerimetroRetangulo() {
        return view('exer6');
    }

    public function calcularPerimetroRetangulo(Request $request) {
        $largura = intval($request->input('largura'));
        $altura = intval($request->input('altura'));

        $perimetro = ($largura * 2) + ($altura * 2);

        return view('exer6', compact('perimetro'));
    }

    public function abrirPerimetroCirculo() {
        return view('exer7');
    }

    public function calcularPerimetroCirculo(Request $request) {
        $raio = floatval($request->input('raio'));

        $perimetro = 2 * 3.14 * $raio;

        return view('exer7', compact('perimetro'));
    }


    public function abrirBaseElevada() {
        return view('exer8');
    }

    public function calcularBaseElevada(Request $request) {
        $base = intval($request->input('base'));
        $expoente = intval($request->input('expoente'));

        $resultado = $base ** $expoente;

        return view('exer8', compact('resultado'));
    }

    public function abrirMetroParaCentimetro() {
        return view('exer9');
    }

    public function calcularMetroParaCentimetro(Request $request) {
        $metro = intval($request->input('metro'));

        $centimetro = $metro * 100;

        return view('exer9', compact('centimetro'));
    }


    public function abrirKmParaMilha() {
        return view('exer10');
    }

    public function calcularKmParaMilha(Request $request) {
        $km = intval($request->input('km'));

        $milha = $km * 0.621371;

        return view('exer10', compact('milha'));
    }


    public function abrirIMC() {
        return view('exer11');
    }

    public function calcularIMC(Request $request) {
        $peso = floatval($request->input('peso'));
        $altura = floatval($request->input('altura'));

        $imc = ($peso / ($altura**2));

        return view('exer11', compact('imc'));
    }


    public function abrirNovoPreco() {
        return view('exer12');
    }

    public function calcularNovoPreco(Request $request) {
        $preco = floatval($request->input('preco'));
        $desconto = floatval($request->input('desconto'));

        $novo_preco = $preco - ($preco * ($desconto/100));

        return view('exer12', compact('novo_preco'));
    }


    public function abrirJurosSimples() {
        return view('exer13');
    }

    public function calcularJurosSimples(Request $request) {
        $capital = floatval($request->input('capital'));
        $taxa = floatval($request->input('taxa'));
        $periodo = floatval($request->input('periodo'));

        $juro = $capital * $taxa * $periodo;

        return view('exer13', compact('juro'));
    }


    public function abrirJurosCompostos() {
        return view('exer14');
    }

    public function calcularJurosCompostos(Request $request) {
        $capital = floatval($request->input('capital'));
        $taxa = floatval($request->input('taxa'));
        $periodo = floatval($request->input('periodo'));

        $juro = ($capital * ((1 + $taxa) **$periodo));

        return view('exer14', compact('juro'));
    }


    public function abrirConversaoHorario() {
        return view('exer15');
    }

    public function calcularConversaoHorario(Request $request) {
        $dias = intval($request->input('dias'));

        $horas = $dias * 24;
        $minutos = $dias * 1440;
        $segundos = $dias * 86400;

        $conversao = $dias . 'dias é o mesmo que: ' . $horas . ' horas | ' . $minutos . '  minutos | ' . $segundos . ' segundos | ';

        return view('exer15', compact('conversao'));
    }
}
