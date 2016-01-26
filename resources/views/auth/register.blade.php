@extends('master') @section('title', 'register') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					<form class="form-horizontal" role="form" method="POST"
						action="{{ url('/register') }}">
						{!! csrf_field() !!}

						<div
							class="form-group{{ $errors->has('userName') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">User Name</label>

							<div class="col-md-6">
								<input type="text" class="form-control" name="userName"
									value="{{ old('name') }}"> @if ($errors->has('userName')) <span
									class="help-block"> <strong>{{ $errors->first('userName') }}</strong>
								</span> @endif
							</div>
						</div>

						<div
							class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">First Name</label>

							<div class="col-md-6">
								<input type="text" class="form-control" name="firstName"
									value="{{ old('name') }}"> @if ($errors->has('firstName')) <span
									class="help-block"> <strong>{{ $errors->first('firstName') }}</strong>
								</span> @endif
							</div>
						</div>

						<div
							class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Last Name</label>

							<div class="col-md-6">
								<input type="text" class="form-control" name="lastName"
									value="{{ old('name') }}"> @if ($errors->has('lastName')) <span
									class="help-block"> <strong>{{ $errors->first('lastName') }}</strong>
								</span> @endif
							</div>
						</div>

						<div
							class="form-group{{ $errors->has('birthDate') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Birth Date</label>

							<div class="col-md-6">
								<input type="text" class="form-control" id="birthDate"
									name="birthDate" value="{{ old('name') }}"> @if
								($errors->has('birthDate')) <span class="help-block"> <strong>{{
										$errors->first('birthDate') }}</strong>
								</span> @endif
							</div>
						</div>

						<div
							class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Address</label>

							<div class="col-md-6">
								<input type="text" class="form-control" name="address"
									value="{{ old('name') }}"> @if ($errors->has('address')) <span
									class="help-block"> <strong>{{ $errors->first('address') }}</strong>
								</span> @endif
							</div>
						</div>

						<div
							class="form-group{{ $errors->has('postalCode') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Postal Code</label>

							<div class="col-md-6">
								<input type="text" class="form-control" name="postalCode"
									value="{{ old('name') }}"> @if ($errors->has('postalCode')) <span
									class="help-block"> <strong>{{ $errors->first('postalCode') }}</strong>
								</span> @endif
							</div>
						</div>

						<div
							class="form-group{{ $errors->has('phoneHome') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Phone Home</label>

							<div class="col-md-6">
								<input type="text" class="form-control" name="phoneHome"
									value="{{ old('name') }}"> @if ($errors->has('phoneHome')) <span
									class="help-block"> <strong>{{ $errors->first('phoneHome') }}</strong>
								</span> @endif
							</div>
						</div>

						<div
							class="form-group{{ $errors->has('phoneCell') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Phone Cell</label>

							<div class="col-md-6">
								<input type="text" class="form-control" name="phoneCell"
									value="{{ old('name') }}"> @if ($errors->has('phoneCell')) <span
									class="help-block"> <strong>{{ $errors->first('phoneCell') }}</strong>
								</span> @endif
							</div>
						</div>

						<div
							class="form-group{{ $errors->has('postalCode') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Postal Code</label>

							<div class="col-md-6">
								<input type="text" class="form-control" name="postalCode"
									value="{{ old('name') }}"> @if ($errors->has('postalCode')) <span
									class="help-block"> <strong>{{ $errors->first('postalCode') }}</strong>
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
								<input type="password" class="form-control" name="password"> @if
								($errors->has('password')) <span class="help-block"> <strong>{{
										$errors->first('password') }}</strong>
								</span> @endif
							</div>
						</div>

						<div
							class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Confirm Password</label>

							<div class="col-md-6">
								<input type="password" class="form-control"
									name="password_confirmation"> @if
								($errors->has('password_confirmation')) <span class="help-block">
									<strong>{{ $errors->first('password_confirmation') }}</strong>
								</span> @endif
							</div>
						</div>

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

<script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#birthDate').datepicker({
                    format: "dd/mm/yyyy"
                });  
            
            });
        </script>
@endsection
