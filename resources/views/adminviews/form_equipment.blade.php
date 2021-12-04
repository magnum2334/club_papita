<div class="container">
    <div class="card col-7 offset-3 my-3">
        <div class="card-body  ">
            <form action="{{ $url }}" method="POST">
                @method($method)
                @csrf
                <div class="form-group"> 
                    <label class="form-label">{{ __('name for equipment')}}</label>
                    <input type="text-area" name="name" id="name" required @error('name') is-invalid @enderror  class="form-control rounded-lg" placeholder="{{ __('name for equipment')}}" >
                    @error('name')
                        <div class="alert alert-danger">{{ $message }} </div>
                    @enderror
                    @include('sweetalert::alert')
                </div>
                <button type="submit" class="my-3 btn btn-success" >{{ __('Send equipment')}}</button>
               
            </form>
        </div>
    </div>
</div>