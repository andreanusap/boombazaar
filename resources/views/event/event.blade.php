@extends('master') @section('title', 'Event Dashboard')
@section('content')
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
	@include('shared.eventnavbar')
	
    <div class="container">
        <div class="content">
    
	</div>
    </div>
    
@endsection