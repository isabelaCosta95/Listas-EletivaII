@extends('layout')

@section('conteudo')
<h1>Exercício 6</h1>
<h3>Imprimir números</h3>
<form method="post" action="/exer6resp">
    @csrf
    <div class="mb-3">
        <label for="numero" class="form-label">Informe o fim do intervalo</label>
        <input type="number" id="numero" name="numero" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($numeros)
        <p>Números: {{ $numeros }} </p>
    @endisset

@endsection