@extends('layout')

@section('conteudo')
<h1>Exercício 9</h1>
<h3>Converte de Metros para Centímetros</h3>
<form method="post" action="/exer9resp">
    @csrf
    <div class="mb-3">
        <label for="metro" class="form-label">Informe o Valor em Metro</label>
        <input type="number" id="metro" name="metro" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($centimetro)
        <p>Conversão para Centímetro: {{ $centimetro }}</p>
    @endisset

@endsection