@extends('layout')

@section('conteudo')
<h1>Exercício 12</h1>
<h3>Informa novo preço após deconto</h3>
<form method="post" action="/exer12resp">
    @csrf
    <div class="mb-3">
        <label for="preco" class="form-label">Informe o Preço</label>
        <input type="number" id="preco" name="preco" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="desconto" class="form-label">Informe o Percentual de Desconto</label>
        <input type="number" id="desconto" name="desconto" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($novo_preco)
        <p>O preço após desconto é: {{ $novo_preco }}</p>
    @endisset

@endsection