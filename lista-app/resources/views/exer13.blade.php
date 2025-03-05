@extends('layout')

@section('conteudo')
<h1>Exercício 13</h1>
<h3>Calculo de Juros Simples</h3>
<form method="post" action="/exer13resp">
    @csrf
    <div class="mb-3">
        <label for="capital" class="form-label">Informe o Capital</label>
        <input type="text" id="capital" name="capital" class="form-control">
    </div>

    <div class="mb-3">
        <label for="taxa" class="form-label">Informe a taxa de juros</label>
        <input type="text" id="taxa" name="taxa" class="form-control">
    </div>

    <div class="mb-3">
        <label for="periodo" class="form-label">Informe o Período</label>
        <input type="text" id="periodo" name="periodo" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($juro)
        <p>O juro simples é de:  {{ $juro }}</p>
    @endisset

@endsection