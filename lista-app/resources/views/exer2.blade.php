@extends('layout')

@section('conteudo')
<h1>Exercício 2</h1>
<h3>Converte temperatura de Celsius para Fahrenheit</h3>
<form method="post" action="/exer2resp">
    @csrf
    <div class="mb-3">
        <label for="temperaturaC" class="form-label">Informe a temperatura em Celsius</label>
        <input type="number" id="temperaturaC" name="temperaturaC" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($temperaturaF)
        <p>A temperatura em Fahrenheit é {{ $temperaturaF }}</p>
    @endisset

@endsection