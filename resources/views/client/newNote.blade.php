@extends('layouts.main')
@section('title','To-do List')
@section('content')

<div class="container text-center " style="margin-top: 100px;">
    <h1 class=" font-monospace   align-middle">Crie sua nota</h1>
</div>

<form class="container" action="/criarnota/salvar" enctype="multipart/form-data" method="post" style="margin-top: 120px;">
 @csrf


    <div class=" input-group ">
        <span class="input-group-text" id="inputGroup-sizing-default">Titulo</span>
        <input type="text" name="title" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
    </div>

    <div class="row mt-4 ">
        <div class=" col-sm input-group ">
            <span class="input-group-text" id="inputGroup-sizing-default">Data Inicial</span>
            <input type="date" name="initialDate" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  >
        </div>

        <div class=" col-sm input-group ">
            <span class="input-group-text" id="inputGroup-sizing-default">Data Final</span>
            <input type="date" name="finalDate" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
    </div>

    <div class="input-group mt-4">
        <span class="input-group-text">Descrição</span>
        <textarea name="description" class="form-control" aria-label="With textarea" required  ></textarea>
    </div>


    <div class="mb-3 mt-4">
        <label for="formFile" class="form-label">Adicionar imagem</label>
        <input class="form-control" name="image" type="file" id="formFile">
    </div>

    

    <div class=" position-relative mt-5">
        <a href="/dashboard" class="position-absolute top-0 start-0 btn btn-outline-dark">Cancelar</a>
        <button type="submit" class=" position-absolute top-0 end-0 btn btn-outline-dark">Salvar Nota</button>
    </div>


</form>
@endsection