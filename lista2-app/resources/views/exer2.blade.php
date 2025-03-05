@extends('layout')

@section('conteudo')
<h1>Exercício 2</h1>
<h3>Mostrar Valores em ordem crescente</h3>
<form method="post" action="/exer2resp">
    @csrf
    <div class="mb-3">
        <label for="valor1" class="form-label">Informe o Valor 1</label>
        <input type="number" id="valor1" name="valor1" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="valor2" class="form-label">Informe o Valor 2</label>
        <input type="number" id="valor2" name="valor2" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($resultado)
        <p>{{ $resultado }} </p>
    @endisset

@endsection