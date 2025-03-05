@extends('layout')

@section('conteudo')
<h1>Exercício Exemplo</h1>
<h3>Média de 3 valores</h3>
<form method="post" action="/exer1resp">
    @csrf
    <div class="mb-3">
        <label for="nota1" class="form-label">Informe a Nota 1</label>
        <input type="number" id="nota1" name="nota1" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="nota2" class="form-label">Informe a Nota 2</label>
        <input type="number" id="nota2" name="nota2" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="nota3" class="form-label">Informe a Nota 3</label>
        <input type="number" id="nota3" name="nota3" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($media)
        <p>A média das notas é {{ $media }}</p>
    @endisset

@endsection