@extends('layouts.app')
@section('content')
   <div class="container my-5">
        <div class="row">
            <div class="fs-2 text-primary text-center"> {{ $equipment->name }}</div>
            @foreach ($equipment->players as $player )
            <div class="card col-3 my-3 mx-3">
                <div class="card-body">
                    <h1>player </h1>
                    <h5 class="card-title">{{ $player->name}}</h5>
                </div>
                <div class="card-footer">
                    <h5 class="card-title">{{ $player->squad_number}}</h5>
                </div>
            </div>
        @endforeach
        </div>
   </div>
   <div class="container">
       <div class="row">
           <div class="col-12">
            
           </div>
       </div>
   </div>
@endsection