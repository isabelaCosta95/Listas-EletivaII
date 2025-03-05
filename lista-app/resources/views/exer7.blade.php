@extends('layout')

@section('conteudo')
<h1>Exercício 7</h1>
<h3>Perímetro do Circulo</h3>
<form method="post" action="/exer7resp">
    @csrf
    <div class="mb-3">
        <label for="raio" class="form-label">Informe o Raio</label>
        <input type="number" id="raio" name="raio" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($perimetro)
        <p>O Perímetro do Círculo {{ $perimetro }}</p>
    @endisset

@endsection