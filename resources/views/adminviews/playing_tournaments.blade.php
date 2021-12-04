@extends('layouts.app')
@section('content')
    <div class="row text-center">
        <div class=" offset-2 col-8 text-center">
            <h1 class="my-2">jugar torneos</h1>
            <table class="table table-dark table-striped my-2">
                <thead class="thead-light">
                    <tr>
                        <th>name</th>
                        <th>status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $tournaments as $tournament )
                    <tr>
                        <td> {{ $tournament->name }}</td>
                        @if ($tournament->status == 1)
                            <td class="text-danger"><a href="{{route('admin.play.tournament', $tournament->id)}}">torneo jugando</a> </td>
                        @else
                            <td class="text-success"><a href="{{route('admin.play.tournament', $tournament->id)}}">jugar torneo</a> </td>
                        @endif     
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>  
@endsection