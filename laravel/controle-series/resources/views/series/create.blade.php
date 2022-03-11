@extends('layout')

@section('cabecalho')
    Adicionar Série
@endsection

@section('conteudo')
@include('erros', ['errors' => $errors])

<form method="post">
    @csrf
    <div class="row">
        <div class="col col-8">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>

        <div class="col col-2">
            <label for="qtd_temporadas">Nº temporadas</label>
            <input type="number" class="form-control" name="qtd_temporadas" id="qtd_temporadas">
        </div>

        <div class="col col-2">
            <label for="ep_por_temporada">Ep. por temporada</label>
            <input type="number" class="form-control" name="ep_por_temporada" id="ep_por_temporada">
        </div>
    </div>
    <dv class="row">
        <div class="col-8">
            <form name="post" action="./?post=true" method="post" enctype="multipart/form-data" class="form-group">
                <label for="anexo">Anexo</label>
                <input type="file" name="file" class="form-control" />
                <!--    Colocando accept para apresentar os arquivos autorizados-->
                <!--    <input type="file" name="file" accept="image/png, image/jpeg"/>-->
                <button class="btn btn-outline-primary mt-2">Enviar!</button>
            </form>
        </div>
    </dv>

    <button class="btn btn-primary mt-2">Adicionar</button>
</form>
@endsection
