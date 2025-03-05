@extends('layout')

@section('conteudo')
<h1>Exercício 8</h1>
<h3>Contagem Regressiva</h3>
<form method="post" action="/exer8resp">
    @csrf
    <div class="mb-3">
        <label for="numero" class="form-label">Informe o fim do intervalo da contagem regressiva</label>
        <input type="number" id="numero" name="numero" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($contagem)
        <p>Contagem Regressiva: {{ $contagem }} </p>
    @endisset

@endsection