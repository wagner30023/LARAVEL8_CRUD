@extends('layouts.app')
@section('title','Listagem')
@section('content')
<!-- Tudo aqui dentro vai ser renderizado lá no nosso template -->
<div class="container mt-5 ">
    <h1>Crie um novo jogo</h1>
    <hr>
    <form action="{{ route('jogos-store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label><br />
            <input type="text" class="form-control" name="nome" placeholder="Digite um nome...">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6"><br />
                <label for="categoria">Categoria:</label><br />
                <input type="text" class="form-control" name="categoria" placeholder="Digite uma categoria para o jogo">
            </div>

            <div class="form-group col-md-6"><br />
                <label for="ano">Ano de criação:</label><br />
                <input type="number" class="form-control" name="ano_criacao">
            </div>
        </div>

        <div class="form-group col-md-6"><br />
            <label for="valor">Valor:</label><br />
            <input type="text" class="form-control" name="valor" placeholder="Digite o valor do jogo">
        </div>
        <div class="form-group"><br />
            <button type="submit" name="submit" class="btn btn-primary">
                Enviar
            </button>
        </div>
    </form>
</div>

@endsection