@if(Session::has('error'))
  <p class="alert alert-danger">{{Session::get('error')}}</p>
@endif

@if ($errors->any())
            @foreach ($errors->all() as $error)
                <p style="text-align:center" class="alert alert-danger">{{ $error }}</p>
            @endforeach
@endif
