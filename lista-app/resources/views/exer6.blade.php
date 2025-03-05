@extends('layout')

@section('conteudo')
<h1>Exercício 6</h1>
<h3>Perímetro do retangulo</h3>
<form method="post" action="/exer6resp">
    @csrf
    <div class="mb-3">
        <label for="largura" class="form-label">Informe a largura</label>
        <input type="number" id="largura" name="largura" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="altura" class="form-label">Informe a altura</label>
        <input type="number" id="altura" name="altura" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($perimetro)
        <p>O Valor do perimetro do retangulo é {{ $perimetro }}</p>
    @endisset

@endsection