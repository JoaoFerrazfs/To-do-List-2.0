@extends('layouts.main')
@section('title','To-do List')
@section('content')


<div class="container" style="margin-top: 120px;">
    <div class=" d-grid p-2 gap-3 ">
        <a href="/criarnota" class="btn btn-outline-info" style="color: black;">Nova Nota</a>
    </div>

    <div class="row">

        <div class="col-sm">
            <div class="alert alert-dark" role="alert">
               
                <div class="alert alert-light  " role="alert">
                    <h5 class="shadow-lg bg-dark text-white text-center   rounded ">Aberto</h5>
                    @foreach ($data as $note)
                    @if($note->status == 'Aberto' )                    
                    <div class="alert alert-dark" role="alert">                        
                            <a class="text-decoration-none text-black  " href="/minhanota/{{$note->_id}}"> {{$note->title}}  </a>                                    
                    </div>
                    @endif         
                    @endforeach
                </div>
               
            </div>
        </div>

        <div class="col-sm">
            <div class="alert alert-dark" role="alert">
                <div class="alert alert-light" role="alert">
                    <h5 class="shadow-lg bg-dark text-white text-center  rounded "> Em andamento </h5>

                    @foreach ($data as $note)
                    @if($note->status == 'Em andamento' )
                    <div class="alert alert-dark" role="alert">                        
                            <a class="text-decoration-none text-black  " href="/minhanota/{{$note->_id}}"> {{$note->title}}  </a>                                    
                    </div>
                    @endif         
                    @endforeach
                    
                </div>
            </div>
        </div>

        <div class="col-sm">
            <div class="alert alert-dark" role="alert">
                <div class="alert alert-light" role="alert">
                    <h5 class="shadow-lg bg-dark text-white text-center rounded "> Fechado </h5>

                    @foreach ($data as $note)
                    @if($note->status == 'Fechado' )
                    <div class="alert alert-dark" role="alert">                        
                            <a class="text-decoration-none text-black  " href="/minhanota/{{$note->_id}}"> {{$note->title}}  </a>                                    
                    </div>
                    @endif         
                    @endforeach
                </div>
            </div>
        </div>



    </div>
</div>


@endsection