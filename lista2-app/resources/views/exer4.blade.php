@extends('layout')

@section('conteudo')
<h1>Exercício 4</h1>
<h3>Números Primos no intervalo </h3>
<form method="post" action="/exer4resp">
    @csrf
    <div class="mb-3">
        <label for="numero" class="form-label">Informe o fim do intervalo</label>
        <input type="number" id="numero" name="numero" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($primos)
        <p>{{ $primos }} </p>
    @endisset

@endsection