@extends('master') @section('title', 'register') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					<form class="form-horizontal" role="form" method="POST"
						action="{{ url('/register') }}">
						
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
						{!! csrf_field() !!}

						<div
							class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Name</label>

							<div class="col-md-6">
								<input type="text" class="form-control" name="name"
									value="{{ old('name') }}"> @if ($errors->has('name')) <span
									class="help-block"> <strong>{{ $errors->first('name') }}</strong>
								</span> @endif
							</div>
						</div>

						<div
							class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">E-Mail Address</label>

							<div class="col-md-6">
								<input type="email" class="form-control" name="email"
									value="{{ old('email') }}"> @if ($errors->has('email')) <span
									class="help-block"> <strong>{{ $errors->first('email') }}</strong>
								</span> @endif
							</div>
						</div>

						<div
							class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Password</label>

							<div class="col-md-6">
								<input type="password" class="form-control" name="password"> 
								@if	($errors->has('password')) <span class="help-block"> <strong>{{
										$errors->first('password') }}</strong>
								</span> @endif
							</div>
						</div>

						<div
							class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Confirm Password</label>

							<div class="col-md-6">
								<input type="password" class="form-control"
									name="password_confirmation"> 
								@if	($errors->has('password_confirmation')) <span class="help-block">
									<strong>{{ $errors->first('password_confirmation') }}</strong>
								</span> @endif
							</div>
						</div>

						<div
							class="form-group{{ $errors->has('birthDate') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Birth Date</label>
							<div class="col-md-6">

								<input type="text" class="form-control" id="birthDate"
									name="birthDate" value="{{ old('birthDate') }}">
								<script type="text/javascript">
            					// When the document is ready
            					$(document).ready(function () {
                
                					$('#birthDate').datepicker({
                   	 				format: "yyyy-mm-dd"
                					});  
            
            					});
        						</script>
								@if ($errors->has('birthDate')) <span class="help-block"> <strong>{{$errors->first('birthDate')
										}}</strong>
								</span> @endif
							</div>
						</div>
						<input type="hidden" name="token" value="{{ uniqid () }}">
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									<i class="fa fa-btn fa-user"></i>Register
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
