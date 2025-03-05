@extends('layout')

@section('conteudo')
<h1>Exercício 11</h1>
<h3>Calculo IMC</h3>
<form method="post" action="/exer11resp">
    @csrf
    <div class="mb-3">
        <label for="peso" class="form-label">Informe o Peso</label>
        <input type="number" id="peso" name="peso" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="altura" class="form-label">Informe a Altura</label>
        <input type="text" id="altura" name="altura" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($imc)
        <p>O Valor do imc é {{ $imc }}</p>
    @endisset

@endsection