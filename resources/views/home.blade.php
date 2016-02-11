@extends('master')
@section('title', 'Home')

@section('content')

    <div class="container">
        <div class="row banner">

            <div class="col-md-12">
            	@if (isset($errors) && $errors->any())
                		@foreach ($errors->all() as $error)
                    		<p class="alert alert-danger">{{ $error }}</p>
                		@endforeach
						@endif
                		@if (session('status'))
                    		<div class="alert alert-success">
                        	{{ session('status') }}
                    		</div>
                		@endif

               
  </div>



    </div>
  </div>
</div>


                
<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>
            </div>

        </div>
    </div>

@endsection