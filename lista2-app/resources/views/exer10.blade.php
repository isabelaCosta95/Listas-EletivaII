@extends('layout')

@section('conteudo')
<h1>Exercício 10</h1>
<h3>Tabuada</h3>
<form method="post" action="/exer10resp">
    @csrf
    <div class="mb-3">
        <label for="numero" class="form-label">Informe o número!</label>
        <input type="number" id="numero" name="numero" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($tabuada)
        <p>tabuada: {!! $tabuada !!}
        </p>
    @endisset

@endsection