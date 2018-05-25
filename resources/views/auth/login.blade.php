@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 ">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row ">
                            <div class="col-md-8 ">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <hr>
                <div class="links" style="margin-left: auto; margin-right: auto;">
                    <div style="padding:7px;">
                        <a class="btn btn-block btn-social btn-facebook" href="redirect/facebook">
                            <span class="fa fa-facebook"></span> Sign in with Facebook
                        </a>
                    </div>
                    <div style="padding:7px;">
                        <a href="redirect/google" class="btn btn-block btn-social btn-google">
                            <span class="fa fa-google"></span> Sign in with Google&nbsp;&nbsp;&nbsp;
                        </a>
                    </div>
                    <div style="padding:7px;">
                        <a href="redirect/twitter" class="btn btn-block btn-social btn-twitter">
                            <span class="fa fa-twitter"></span> Sign in with Twitter&nbsp;&nbsp;&nbsp;
                        </a>

                    </div>
                    <div style="padding:7px;">
                        <a href="redirect/github" class="btn btn-block btn-social btn-github">
                            <span class="fa fa-github"></span> Sign in with GitHub&nbsp;&nbsp;&nbsp;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
