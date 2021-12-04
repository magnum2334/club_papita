@extends('layouts.app')

@section('content')
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
        <div class="col-3 my-5 mx-2">
            <a href="{{route('admin.create.player') }}" class="btn btn-warning btn-fab btn-lg" id ="btn-post" title="Agregar nuevo torneo">
                <div class="d-flex w-100 align-items-center justify-content-around">
                   <i class="material-icons pr-3">create player</i>
                   <i class="fas fa-plus-circle"></i>
                </div>
           </a>
        </div>
    </div>
@endsection