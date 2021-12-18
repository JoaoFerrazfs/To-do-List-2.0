@extends('layouts.main')
@section('title','To-do List')
@section('content')


<form class="container" style="margin-top: 120px;">
  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Perfis Cadastrados</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>

  
  <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Atualizar Perfil</button>
  <a href="/dashboards" class="btn btn-primary" style="margin-top: 20px;">Voltar</a>
</form>



@endsection