@extends('layout')

@section('conteudo')
<h1>Exercício 4</h1>
<h3>Calcula a Área do retangulo</h3>
<form method="post" action="/exer4resp">
    @csrf
    <div class="mb-3">
        <label for="largura" class="form-label">Informe a Largura</label>
        <input type="number" id="largura" name="largura" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="altura" class="form-label">Informe a Altura</label>
        <input type="number" id="altura" name="altura" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($area)
        <p>A Área do retangulo é {{ $area }}</p>
    @endisset

@endsection