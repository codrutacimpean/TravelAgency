@extends('layouts.app')
@section('template-class')

register-template

@endsection
@section('content')
<div class="container contact">
	<div class="row">
        <h1 style = "margin-left: 20px">{{ __('Contul meu:') }}</h1>
		<div class="col-md-12" style = "background: rgba(209, 205, 205, 0.1); margin-right:100px">
			<div class="contact-form">
                <div class="form-group">
                <div class="card-body" style = "background-image: url(../public/img/star.png); background-repeat: no-repeat;">
                    <form style = "padding:95px;" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row" style = "width: 580px; margin-left:270px">
                            <label for="email" class="control-label col-sm-2">{{ __('E-mail') }}</label>

                            <div class="col-sm-10">
                                <input style = "background: rgba(250, 247, 247, 0.1);" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row" style = "width: 580px; margin-left:270px">
                            <label for="password" class="control-label col-sm-2">{{ __('Parola') }}</label>

                            <div class="col-sm-10">
                                <input style = "background: rgba(250, 247, 247, 0.1);" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                             
                            <button style = "margin-top:120px; margin-left:300px;" type="submit" class="btn btn-primary" id = " form-group text-center">
                                {{ __('Logheaza-te in cont') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a style = "margin-top:120px; margin-left:100px; width:120px" class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Ai uitat parola?') }}
                                </a>
                            @endif
                    </form>
                </div> 
            </div>
        </div>
    </div> 
</div>

@endsection
