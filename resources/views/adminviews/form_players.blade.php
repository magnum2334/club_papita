<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card my-3">
                <div class="card-body  ">
                    <form action="{{ $url }}" method="POST">
                        @method($method)
                        @csrf
                        <div class="form-group"> 
                            <label class="form-label">{{ __('name for players')}}</label>
                            <input type="text-area" name="name" id="name" required @error('name') is-invalid @enderror  class="form-control my-2 rounded-lg" placeholder="{{ __('name for player')}}" >
                            <input class="form-control" type="number" name="squad_number" id="squad_number" required @error('name') is-invalid @enderror  class="form-control rounded-lg" placeholder="{{ __('squad_number')}}" >
                            
                            <select  class="my-2 form-control col-3 select_squat" name="equiment_id" id="equiment_id">
                                @foreach ($equipments as  $equipment)
                                    <option value="{{$equipment->id}}">{{ $equipment->name }}</option>
                                @endforeach 
                            </select>
                            
                            {{-- validaciones --}}
                            @error('name')
                                <div class="alert alert-danger">{{ $message }} </div>
                            @enderror
        
                            @error('squad_number')
                                <div class="alert alert-danger">{{ $message }} </div>
                            @enderror
                        </div>
                        <button type="submit" class="my-3 btn btn-success" >{{ __('Send player')}}</button>
                    </form>         
                </div>
            </div>
        </div>
        <div class="col-5 my-3">
            <div class="card">
                <div class="card-body">
                  ss 
                </div>
            </div>
        </div>
    </div>
</div>