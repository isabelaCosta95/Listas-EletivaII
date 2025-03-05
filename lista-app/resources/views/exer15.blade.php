@extends('layout')

@section('conteudo')
<h1>Exercício 15</h1>
<h3>Converter Dias em horas, minutos e segundos</h3>
<form method="post" action="/exer15resp">
    @csrf
    <div class="mb-3">
        <label for="dias" class="form-label">Informe a Quantidade de dias</label>
        <input type="number" id="dias" name="dias" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($conversao)
        <p>Convertendo: {{ $conversao }}</p>
    @endisset

@endsection