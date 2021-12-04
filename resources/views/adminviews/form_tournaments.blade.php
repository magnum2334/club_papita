<div class="container">
    <form action="{{ $url }}" method="POST">
        <div class="row">
            <div class="col-6">
                <div class="card offset-3 my-3">
                    <div class="card-body  ">
                        @method($method)
                        @csrf
                        <div class="form-group"> 
                            <label class="form-label">{{ __('name for tournament')}}</label>
                            <input type="text-area" name="name" id="name" required @error('name') is-invalid @enderror  class="form-control rounded-lg" placeholder="{{ __('name tournament')}}" >
                            @error('name')
                                <div class="alert alert-danger">{{ $message }} </div>
                            @enderror
                        </div>
                        <button type="submit" class="my-3 btn btn-primary" >{{ __('Send tournament')}}</button>
                    </div>
                </div>
            </div>
            <div class="col-3 my-3">
                <h1>teams complete</h1>
                <select class="js-example-basic-multiple" name="equipments[]" multiple="multiple">
                    @foreach ($equipments as $equipment)     
                        @if ($equipment->players->count() > 10)
                            <option class="item-select" value="{{$equipment->id}}">{{ $equipment->name}}</option> 
                        @endif
                    @endforeach    
                </select>
            </div>
        </div>
    </form>

</div>