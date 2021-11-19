<div class="container">
    <div class="card col-7 offset-3 my-3">
        <div class="card-body  ">
            <form action="{{ $url }}" method="POST">
                @method($method)
                @csrf
                <div class="form-group"> 
                    <label class="form-label">{{ __('name for tournament')}}</label>
                    <input type="text-area" name="name" id="name" required @error('name') is-invalid @enderror  class="form-control rounded-lg" placeholder="{{ __('name tournament')}}" >
                    @error('name')
                        <div class="alert alert-danger">{{ $message }} </div>
                    @enderror
                </div>
                <button type="submit" class="my-3 btn btn-primary" >{{ __('Send')}}</button>
            </form>
         </div>
     </div>
</div>