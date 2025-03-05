@extends('layout')

@section('conteudo')
<h1>Exercício 3</h1>
<h3>Se produto for mais caro que R$ 100,00 será aplicado desconto de 15% </h3>
<form method="post" action="/exer3resp">
    @csrf
    <div class="mb-3">
        <label for="produto" class="form-label">Informe o preço do produto</label>
        <input type="number" id="produto" name="produto" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($resultado)
        <p> Preço final: {{ $resultado }} </p>
    @endisset

@endsection