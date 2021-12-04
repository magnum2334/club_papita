@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row text-center">
            <h1>dasboard</h1>
            <div class="col-12 my-5 mx-2  @if (!Auth::user()->role) d-none @endif">
                <a href="{{route('home') }}" class="btn btn-success btn-fab btn-lg" id ="btn-post" title="Agregar nuevo torneo">
                    <div class="d-flex w-100 align-items-center justify-content-around">
                       <i class="material-icons pr-3">admin</i>
                       <i class="fas fa-plus-circle"></i>
                    </div>
               </a>
            </div>
            @foreach ($tournaments as $tournament )
                <div class="card col-3 text-center my-2 mx-2">       
                    <h5 class="card-title fs-4 py-3">{{ $tournament->name }}</h5>
                    @if ($tournament->status === 0 )
                        <p class="text-danger">inactivo</p>
                    @else
                        <p class="text-success">activo</p> 
                    @endif
                    
                    @if($tournament->status === 0)
                        <div class="card-body">
                            @foreach ( $tournament->equipments as $equipment)
                                <div><a class="card-text" href="{{route('show.equipment.tournament' ,$equipment) }}">{{ $equipment->name }}</a></div>
                            @endforeach
                        </div>
                    @else
                        <div class="card-body">
                            <div><a class="card-text">cuartos</a></div>
                            <div><a class="card-text">semi final</a></div>
                            <div><a class="card-text">final</a></div>
                        </div>
                   @endif
                </div>
            @endforeach
        </div>
    </div>
@endsection