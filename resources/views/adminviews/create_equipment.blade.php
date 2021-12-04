@extends('layouts.app')

@section('content')
    <div class="row text-center">
        <h1>create equipment </h1>
    </div>
        @include('adminviews.form_equipment', ['method' => 'POST', 'url' => route('admin.store.equipment')])
@endsection