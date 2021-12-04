@extends('layouts.app')
@section('content')
<div class="row">
    <div class="card col-7 offset-3 my-3 my-2">
        <div class="card-body ">
            <h5 class="card-title">cuartos</h5>
            <h5 class="card-tilte"><label class="form-label">{{ __('selecione 2 equipos')}}</label></h5>
            <form action="{{ $url }}" method="POST">
                @method($method)
                @csrf
                <div class="form-group"> 
                    <div class="col-9 my-1">    
                        <label class="form-label">{{ __(' partido 1')}}</label>
                        <select class="js-example-basic-multiple" name="matches1[]" multiple="multiple">
                            @foreach ($tournament->equipments as  $equipment)
                                <option value="{{$equipment->id}}">{{ $equipment->name }}</option>
                            @endforeach 
                        </select>
                    </div>
                    <div class="col-9 my-1">    
                        <label class="form-label">{{ __(' partido 2')}}</label>
                        <select class="js-example-basic-multiple" name="matches2[]" multiple="multiple">
                            @foreach ($tournament->equipments as  $equipment)
                                <option value="{{$equipment->id}}">{{ $equipment->name }}</option>
                            @endforeach 
                        </select>
                    </div>
                    <div class="col-9 my-1">
                        <label class="form-label">{{ __('partido 3')}}</label>
                        <select class="js-example-basic-multiple" name="matches3[]" multiple="multiple">
                            @foreach ($tournament->equipments as  $equipment)
                                <option value="{{$equipment->id}}">{{ $equipment->name }}</option>
                            @endforeach 
                        </select>
                    </div>
                    <div class="col-9 my-1">
                        <label class="form-label">{{ __('partido 4')}}</label>
                        <select class="js-example-basic-multiple" name="matches4[]" multiple="multiple">
                            @foreach ($tournament->equipments as  $equipment)
                                <option value="{{$equipment->id}}">{{ $equipment->name }}</option>
                            @endforeach 
                        </select>
                    </div>
                </div>
                <button type="submit" class="my-3 btn btn-success" >{{ __('Send matches')}}</button>
            </form>
        </div>
    </div>
</div>
@endsection