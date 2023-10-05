@extends('layouts.app')
@section('title','Edição')
@section('content')
<!-- Tudo aqui dentro vai ser renderizado lá no nosso template -->
<div class="container mt-5 ">
    <h1>Editar jogo</h1>
    <hr>
    <form action="{{ route('jogos-update',['id' => $jogos->id])}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label><br />
            <input type="text" class="form-control" name="nome" value="{{ $jogos->nome }}" placeholder="Digite um nome...">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6"><br />
                <label for="categoria">Categoria:</label><br />
                <input type="text" class="form-control" name="categoria" value="{{ $jogos->categoria }}" placeholder="Digite uma categoria para o jogo">
            </div>

            <div class="form-group col-md-6"><br />
                <label for="ano">Ano de criação:</label><br />
                <input type="number" class="form-control" name="ano_criacao" value="{{ $jogos->ano_criacao }}">
            </div>
        </div>

        <div class="form-group col-md-6"><br />
            <label for="valor">Valor:</label><br />
            <input type="text" class="form-control" name="valor" value="{{ $jogos->valor }}"/>
        </div>
        <div class="form-group"><br />
            <button type="submit" name="submit" class="btn btn-success" value="Atualizar">
                Atualizar
            </button>
        </div>
    </form>
</div>

@endsection