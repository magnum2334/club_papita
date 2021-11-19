@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 my-5">
                <a href="{{route('admin.create.tournament') }}" class="btn btn-dark btn-fab btn-lg" id ="btn-post" title="Agregar nuevo torneo">
                    <div class="d-flex w-100 align-items-center justify-content-around">
                       <i class="material-icons pr-3">crear torneo</i>
                       <i class="fas fa-plus-circle"></i>
                    </div>
               </a>
            </div>
            {{-- boton crear equipo --}}
            <div class="col-3 my-5 mx-2">
                <a href="{{route('admin.create.equipment') }}" class="btn btn-primary btn-fab btn-lg" id ="btn-post" title="Agregar nuevo torneo">
                    <div class="d-flex w-100 align-items-center justify-content-around">
                       <i class="material-icons pr-3">crear equipo</i>
                       <i class="fas fa-plus-circle"></i>
                    </div>
               </a>
            </div>
        </div>

        
            {{-- carousel de boostrap para los torneos --}}
        <div class="row">
            <div class="col-12">
                <h1 class="text-center pr-5 fs-5">torneos</h1>
                <div id="carouselExampleControls" class="carousel slide" data-mdb-ride="carousel">
                    @foreach ( $tournamentsAdmin as $tournament )
                    <div class="carousel-inner">
                        <div class="carousel-item-{{$tournament->id}}">       
                            <div class="offset-md-2 col-md-6 fs-5 my-2 h-100 "> 
                                <div class="card letter_size w-100 rounded shadow">
                                    <h5 class="card-header">{{$tournament->name}}</h5>
                                    <div class="card-footer text-decoration-underline">
                                        <cite title="Source Title">{{$tournament->date}} </cite>
                                    </div>
                                </div>
                            </div>         
                        </div>  
                    </div>
                    @endforeach
                    <button
                      class="carousel-control-prev"
                      type="button"
                      data-mdb-target="#carouselExampleControls"
                      data-mdb-slide="prev"
                    >
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button
                      class="carousel-control-next"
                      type="button"
                      data-mdb-target="#carouselExampleControls"
                      data-mdb-slide="next"
                    >
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection