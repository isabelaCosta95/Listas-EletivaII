@extends('layout')

@section('conteudo')
<h1>Exercício 7</h1>
<h3>Soma todos os números</h3>
<form method="post" action="/exer7resp">
    @csrf
    <div class="mb-3">
        <label for="numero" class="form-label">Informe o fim do intervalo</label>
        <input type="number" id="numero" name="numero" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($numeros)
        <p>Soma de todos os números: {{ $numeros }} </p>
    @endisset

@endsection