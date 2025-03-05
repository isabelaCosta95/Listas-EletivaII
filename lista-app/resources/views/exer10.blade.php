@extends('layout')

@section('conteudo')
<h1>Exercício 10</h1>
<h3>Converte de Km para Milhas</h3>
<form method="post" action="/exer10resp">
    @csrf
    <div class="mb-3">
        <label for="km" class="form-label">Informe o Valor em KM</label>
        <input type="number" id="km" name="km" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($milha)
        <p>Conversão para milha: {{ $milha }}</p>
    @endisset

@endsection