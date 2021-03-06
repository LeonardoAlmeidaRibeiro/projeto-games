@extends('layouts.app')

@section('title','Criação')
    

@section('content')
<div class="container mt-5">
    <h1> Cadastre um novo jogo</h1>
    <hr>
    <form action="{{route('jogos-store')}}" method="POST">
      @csrf
      <div class="form-group">
          <label  for="nome"> Nome: </label>
          <input type="text" class="form-control" name="nome" placeholder="Digite o nome do jogo...">
        </div>
        <br>
        <div class="form-group">
          <label  for="categoria"> Categoria: </label>
          <input type="text" class="form-control" name="categoria" placeholder="Digite uma categoria para o jogo...">
        </div>
        <br>
        <div class="form-group">
          <label  for="ano_criacao"> Ano de Lançamento: </label>
          <input type="number" class="form-control" name="ano_criacao" placeholder="Digite o ano de lançamento...">
        </div>
        <br>
        <div class="form-group">
          <label  for="valor"> Valor: </label>
          <input type="number" class="form-control" name="valor" placeholder="Digite o preço do jogo...">
        </div>
        <br>
        <div class="form-group">
          <input type="submit" name="submit" class="btn btn-primary">
        </div> 
    </form>
</div>  
@endsection