@extends('layouts.main')
@section('title','To-do List')
@section('content')

<div class="container text-center " style="margin-top: 100px;">
    <h1 class=" font-monospace   align-middle">Sua Nota</h1>
</div>


<div class="container" style="margin-top: 120px;">
    <form class="container" action="/minhanota/editar" enctype="multipart/form-data" method="post">
        @csrf

        <input type="hidden" value="{{$note['id']}}" name="id">
        <div class=" input-group ">
            <span class="input-group-text" id="inputGroup-sizing-default">Titulo</span>
            <input type="text" name="title" value="{{$note['title']}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="row mt-4 ">
            <div class=" col-sm input-group ">
                <span class="input-group-text" id="inputGroup-sizing-default">Data Inicial</span>
                <input type="date" value="{{$note['initialDate']}}" name="initialDate" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class=" col-sm input-group ">
                <span class="input-group-text" id="inputGroup-sizing-default">Data Final</span>
                <input type="date" value="{{$note['finalDate']}}" name="finalDate" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
        </div>

        <div class="input-group mt-4">
            <span class="input-group-text">Descrição</span>
            <textarea name="description" class="form-control" aria-label="With textarea"> {{$note['description']}} </textarea>
        </div>

        @if ($note['image'] != null)
        <div class="row mt-4">
            <div class="col">
                <img src="/img/products/{{$note['image']}}" style="max-width: 350px;" class=" img-fluid img-thumbnail rounded float-start" alt="...">

            </div>


            <div class="mb-3 mt-1 col">
                <label for="formFile" class="form-label">Trocar Imagem</label>
                <input class="form-control" name="image" type="file" id="formFile">
            </div>
        </div>

        @else

        <div class="mb-3 mt-1 col">
            <label for="formFile" class="form-label">Adicionar Imagem</label>
            <input class="form-control" name="image" type="file" id="formFile">
        </div>
        @endif

        <select name="status" class="form-select form-select-lg mt-4 mb-3" aria-label=".form-select-lg example">
            <option selected>{{$note['status']}}</option>
            <option value="Aberto">Aberto</option>
            <option value="Em andamento">Em andamento</option>
            <option value="Fechado">Fechado</option>
        </select>

        <div class=" position-relative mt-5" style="margin-bottom: 150px;">
            <a href="/dashboard" class="position-absolute top-0 start-0 btn btn-outline-dark">Cancelar</a>

            <button type="submit" class=" position-absolute top-0 end-0 btn btn-outline-dark">Salvar Nota</button>
        </div>


    </form>

    <form method="post" class="container" action="/minhanota/apagar/{{$note['id']}}">
        @method('delete')
        @csrf

        <button type="submit" class="position-absolute start-50 btn btn-outline-danger">Apagar Nota</button>

    </form>

</div>

@endsection