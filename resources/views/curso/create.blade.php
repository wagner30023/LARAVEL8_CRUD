@extends('layouts.app')
@section('title','Listagem')
@section('content')
<!-- Tudo aqui dentro vai ser renderizado lá no nosso template -->
<div class="container mt-5 ">
    <h1>Crie um novo curso</h1>
    <hr>
    <form action="{{ route('curso.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Sigla curso:</label><br />
            <input type="text" class="form-control" name="sg_curso" placeholder=" Sigla curso">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6"><br />
                <label for="categoria">Categoria:</label><br />
                <input type="text" class="form-control" name="nu_seq_categoria" placeholder="Digite uma categoria para o jogo">
            </div>

            <div class="form-group col-md-6"><br />
                <label for="uf">UF</label><br />
                <input type="text" class="form-control" name="sg_uf">
            </div>
        </div>

        <div class="form-group col-md-6"><br />
            <label for="dt_cadastro"> Data cadastro </label><br />
            <input type="date" class="form-control" name="dt_cadastro" placeholder="Digite o valor do jogo">
        </div>
        <div class="form-group"><br />
            <button type="submit" name="submit" class="btn btn-primary">
                Enviar
            </button>
        </div>
    </form>
</div>

@endsection