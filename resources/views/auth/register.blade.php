@extends('layouts.app')
@section('template-class')

register-template

@endsection

@section('content')
<div class="container contact" style = "margin-top:5px">
	<div class="row">
		<h1 style = "margin-left: 450px">{{ __('Creeaza cont:') }}</h1>
		<div class="col-md-12">
		<div class="card-body" style = "background-image: url(../public/img/star.png); background-repeat: no-repeat;">
			<form  method="POST" action="{{ route('register') }}">
				@csrf
		<div style = "background: rgba(209, 205, 205, 0.1);margin-left:400px" class="col-md-9">
			<div class="contact-form" >
				<div class="form-group" > 
						<label for="name" class="control-label col-sm-2">{{ __('Nume') }}</label>
                        <input style = "background: rgba(209, 205, 205, 0.1); " id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
						@error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
				</div>
					<div class="form-group">
					<label for="email" class="control-label col-sm-2">{{ __('E-mail') }}</label>
					<div class="col-sm-10">
						<input style = "background: rgba(209, 205, 205, 0.1); " id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
				</div>
				<div class="form-group">
					<label for="password" class="control-label col-sm-2">{{ __('Parola') }}</label>
					<div class="col-sm-10">
						<input style = "background: rgba(209, 205, 205, 0.1); " id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
						@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
				</div>
				<div class="form-group">
					<label for="password-confirm" class="control-label col-sm-2">{{ __('Confirma parola') }}</label>
					<div class="col-sm-10">
						<input style = "background: rgba(250, 247, 247, 0.1); " id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
					</div> 
				</div>
					<button type="submit" class="btn btn-default">
						{{ __('Creeaza cont') }}
					</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection
