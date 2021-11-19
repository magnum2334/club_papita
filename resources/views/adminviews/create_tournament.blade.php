@extends('layouts.app')
@section('content')
    <div class="row text-center">
        <h1>create tournament</h1>
    </div>
    @include('adminviews.form', ['method' => 'POST', 'url' => route('admin.store.tornament')])
@endsection