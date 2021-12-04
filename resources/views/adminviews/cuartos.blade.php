@extends('layouts.app')
@section('content')

@include('adminviews.form_cuartos', ['method' => 'POST', 'url' => route('admin.store.cuartos', $tournament->id)])
@endsection