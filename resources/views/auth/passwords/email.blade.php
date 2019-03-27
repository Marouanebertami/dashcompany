@extends('layouts.login')
@section('title')
    Reset Password
@endsection

@section('content')
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="splash-container">
        <div class="card">
            <div class="card-header text-center">
                <img class="logo-img" src="{{ asset('images/logo.png') }}" alt="logo"><span class="splash-description">Please enter your user information.</span>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}
                    <p>Don't worry, we'll send you an email to reset your password.</p>
                    <div class="form-group">
                        <input class="form-control form-control-lg{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" placeholder="Your Email" autocomplete="off">
                        @if ($errors->has('email'))
                            <div class="invalid-feedback">{{ $errors->first('email') }}.</div>
                        @endif
                    </div>
                    <div class="form-group pt-1"><input type="submit" value="Reset Password" class="btn btn-block btn-primary btn-xl"></div>
                </form>
            </div>
            <div class="card-footer text-center">
                <span>Don't have an account? <a href="{{ route('register') }}">Sign Up</a></span>
            </div>
        </div>
    </div>
@endsection
