@extends('layout')

@section('conteudo')
<h1>Exercício 5</h1>
<h3>Área do circulo</h3>
<form method="post" action="/exer5resp">
    @csrf
    <div class="mb-3">
        <label for="raio" class="form-label">Informe o Raio</label>
        <input type="number" id="raio" name="raio" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($area)
        <p>A área do circulo é {{ $area }}</p>
    @endisset

@endsection