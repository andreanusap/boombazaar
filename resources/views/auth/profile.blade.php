@extends('master') @section('title', 'Profile') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Profile</div>
				<div class="panel-body">
					<form class="form-horizontal" role="form" method="POST"
						action="{{ url('/profile') }}">
						{!! csrf_field() !!}

						<div
							class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Name</label>

							<div class="col-md-6">
								<input type="text" class="form-control" name="name"
									value="{!! $users['name'] !!}"> @if ($errors->has('name')) <span
									class="help-block"> <strong>{{ $errors->first('name') }}</strong>
								</span> @endif
							</div>
						</div>

						<div
							class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">E-Mail Address</label>

							<div class="col-md-6">
								<input type="email" class="form-control" name="email" disabled
									value="{!! $users['email'] !!}"> @if ($errors->has('email')) <span
									class="help-block"> <strong>{{ $errors->first('email') }}</strong>
								</span> @endif
							</div>
						</div>

						<div
							class="form-group{{ $errors->has('old_password') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Old Password</label>

							<div class="col-md-6">
								<input type="password" class="form-control" name="old_password">
								@if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('old_password') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						
						<div
							class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Password</label>

							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
								@if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>

						<div
							class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Confirm Password</label>

							<div class="col-md-6">
								<input type="password" class="form-control"
									name="password_confirmation">
									@if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button class="btn btn-default">
									<a href="/home">Cancel 
								
								</button>
								<button type="submit" class="btn btn-primary">
									<i class="fa fa-btn fa-user"></i>Update
								</button>
							</div>
						</div>
					</form>
					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							@if ($users['facebook_id'] == NULL) <a class="btn btn-info"
								href="/auth/facebook">Connect to Facebook</a> @else <a
								class="btn btn-info" disabled href="/auth/facebook">Connect to
								Facebook</a> @endif

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
