@extends('master') @section('title', 'Create Organizer') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Create Organizer</div>
				<div class="panel-body">
					<form class="form-horizontal" role="form" method="POST"
						action="{{ url('/createOrganizer') }}">
						
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
							class="form-group{{ $errors->has('organizerName') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Organizer Name</label>

							<div class="col-md-6">
								<input type="text" class="form-control" name="organizerName"
									value="{{ old('organizerName') }}"> @if ($errors->has('organizerName')) <span
									class="help-block"> <strong>{{ $errors->first('organizerName') }}</strong>
								</span> @endif
							</div>
						</div>
						<div
							class="form-group{{ $errors->has('organizerDesc') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Organizer Desc</label>

							<div class="col-md-6">

									<textarea class="form-control" name="organizerDesc">
									@if ($errors->has('organizerDesc')) <span
									class="help-block"> <strong>{{ $errors->first('organizerDesc') }}</strong>
								</span> @endif
									
									</textarea>
									
							</div>
						</div>
						<div
							class="form-group{{ $errors->has('imageUrl') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Image URL</label>

							<div class="col-md-6">
								<input type="text" class="form-control" name="imageUrl"
									value="{{ old('imageUrl') }}"> @if ($errors->has('imageUrl')) <span
									class="help-block"> <strong>{{ $errors->first('imageUrl') }}</strong>
								</span> @endif
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									<i class="fa fa-btn fa-user"></i>Create
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
