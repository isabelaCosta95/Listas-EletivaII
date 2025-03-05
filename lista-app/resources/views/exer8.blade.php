@extends('layout')

@section('conteudo')
<h1>Exercício 8</h1>
<h3>Eleva a base ao expoente</h3>
<form method="post" action="/exer8resp">
    @csrf
    <div class="mb-3">
        <label for="base" class="form-label">Informe a Base</label>
        <input type="number" id="base" name="base" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="expoente" class="form-label">Informe o Expoente</label>
        <input type="number" id="expoente" name="expoente" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($resultado)
        <p>O Valor da base elevada ao expoente é {{ $resultado }}</p>
    @endisset

@endsection