@extends('layouts.app')
@section('content')
<div class="row d-flex justify-content-center">
    <h1 class="text-center"> emparejamientos</h1>

    <div class="col-3 my-5">
        <a href="{{route('admin.cuartos.tournament', $tournament->id)}}" class="btn btn-primary btn-fab btn-lg" id ="btn-post" title="Agregar nuevo torneo">
            <div class="d-flex w-100 align-items-center  justify-content-around">
               <i class="material-icons pr-3">cuartos</i>
               <i class="fas fa-plus-circle"></i>
            </div>
        </a>
    </div>
    {{-- boton crear equipo --}}
    <div class="col-3 my-5 mx-2">
        <a href="{{route('admin.create.equipment') }}" class="btn btn-primary btn-fab btn-lg" id ="btn-post" title="Agregar nuevo torneo">
            <div class="d-flex w-100 align-items-center justify-content-around">
               <i class="material-icons pr-3">semi final</i>
               <i class="fas fa-plus-circle"></i>
            </div>
       </a>
    </div>
    <div class="col-3 my-5 mx-2">
        <a href="{{route('admin.create.player') }}" class="btn btn-warning btn-fab btn-lg" id ="btn-post" title="Agregar nuevo torneo">
            <div class="d-flex w-100 align-items-center justify-content-around">
               <i class="material-icons pr-3">final</i>
               <i class="fas fa-plus-circle"></i>
            </div>
       </a>
    </div>
</div>
@endsection