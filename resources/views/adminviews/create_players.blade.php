@extends('layouts.app')

@section('content')
    <div class="row text-center my-2">
        <h1>create jugador</h1>
    </div>
        @include('adminviews.form_players', ['method' => 'POST', 'url' => route('admin.store.player')])
@endsection