{{-- <h1>Editar Produto</h1>

<form action="{{ route('produtos.update', $produto) }}" method="POST">
    @csrf
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" value="{{ $produto->nome }}">

    <label for="preco">Preço:</label>
    <input type="number" name="preco" id="preco" value="{{ $produto->preco }}">

    <button type="submit">Atualizar</button>
</form> --}}
@extends('layouts.app')
@section('content')

    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/inputmask@5.0.6/dist/inputmask/inputmask.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/inputmask@5.0.6/dist/inputmask/inputmask.date.extensions.min.js"></script>

    </head>

    <body style="margin: 20px">

        <h1>Cadastrar Novo Produto</h1>

        <form action="{{ route('produtos.update', $produto) }}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputName">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control" value="{{ $produto->nome }}"
                        required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputSurname">Valor</label>
                    <input type="boolean" name="preco" id="preco" class="form-control " value="{{ $produto->preco }}"
                        required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Marca</label>
                    <input type="text" name="marca" id="marca" class="form-control" value="{{ $produto->marca }}"
                        required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputSurname">Quantidade</label>
                    <input type="number" name="quantidade" id="quantidade" class="form-control "
                        value="{{ $produto->quantidade }}"required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </body>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        Inputmask('99/99/9999').mask(document.getElementById('dataInput'));
    });
</script>
