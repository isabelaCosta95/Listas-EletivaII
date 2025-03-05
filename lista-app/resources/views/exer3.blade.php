@extends('layout')

@section('conteudo')
<h1>Exercício 3</h1>
<h3>Converte temperatura de Fahrenheit para Celsius</h3>
<form method="post" action="/exer3resp">
    @csrf
    <div class="mb-3">
        <label for="temperaturaF" class="form-label">Informe a temperatura em Fahrenheit</label>
        <input type="number" id="temperaturaF" name="temperaturaF" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($temperaturaC)
        <p>A temperatura em Celsius é {{ $temperaturaC }}</p>
    @endisset

@endsection