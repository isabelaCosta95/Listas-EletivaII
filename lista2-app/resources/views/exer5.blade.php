@extends('layout')

@section('conteudo')
<h1>Exercício 5</h1>
<h3>Número dos meses</h3>
<form method="post" action="/exer5resp">
    @csrf
    <div class="mb-3">
        <label for="mes" class="form-label">Informe o número para descobrir o mês</label>
        <input type="number" id="mes" name="mes" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($mes)
        <p>Mês: {{ $mes }} </p>
    @endisset

@endsection