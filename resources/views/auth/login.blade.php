@extends('layouts.auth')

@section('content')
    <div class="login-form">
        <form  role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            <div class="top">
                <h1><i class="fa fa-users icon" aria-hidden="true"></i></h1>
            </div>
            <div class="form-area">
                <div class="group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    <i class="fa fa-user"></i>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" class="form-control" name="password" required>
                    <i class="fa fa-key"></i>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="checkbox checkbox-primary">
                    <input id="checkbox101" name="remember" type="checkbox" checked>
                    <label for="checkbox101"> Remember Me</label>
                </div>
                <button type="submit" class="btn btn-default btn-block">LOGIN</button>
            </div>
        </form>
        <div class="footer-links row">
            <div class="col-xs-6 "><a href="{{ url('/password/reset') }}"><i class="fa fa-lock"></i> Forgot password</a></div>
        </div>
    </div>
@endsection
