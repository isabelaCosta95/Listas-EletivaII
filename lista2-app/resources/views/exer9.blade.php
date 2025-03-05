@extends('layout')

@section('conteudo')
<h1>Exercício 9</h1>
<h3>Fatorial</h3>
<form method="post" action="/exer9resp">
    @csrf
    <div class="mb-3">
        <label for="numero" class="form-label">Informe o número!</label>
        <input type="number" id="numero" name="numero" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($fatorial)
        <p>Fatorial: {{ $fatorial }} </p>
    @endisset

@endsection