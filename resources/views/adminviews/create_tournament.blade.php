@extends('layouts.app')
@section('content')
    <div class="row text-center">
        <h1>create tournament</h1>
    </div>
    <div class="row">
        <div class="col-12">
            @include('adminviews.form_tournaments', ['method' => 'POST', 'url' => route('admin.store.tornament')])
        </div>
        <div class="col-12 text-center my-5 mx-2 ">
            <a href="{{route('admin.playing.tournaments') }}" class=" btn btn-success btn-fab btn-lg" id ="btn-post" title="Agregar nuevo torneo">
                <div class="d-flex w-100 align-items-center justify-content-around">
                   <i class="material-icons pr-3">torneos</i>
                   <i class="fas fa-plus-circle"></i>
                </div>
           </a>
        </div>
    </div>
    
@endsection