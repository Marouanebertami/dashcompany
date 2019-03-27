@extends('layouts.login')

@section('title')
    Register
@endsection

@section('content')
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('civility') ? ' has-error' : '' }}">
                            <label for="civility" class="col-md-4 control-label">Civility</label>

                            <div class="col-md-6">
                                <input id="civility" type="text" class="form-control" name="civility" value="{{ old('civility') }}" required autofocus>

                                @if ($errors->has('civility'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('civility') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                            <label for="firstName" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="firstName" type="text" class="form-control" name="firstName" value="{{ old('firstName') }}" required autofocus>

                                @if ($errors->has('firstName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
                            <label for="lastName" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control" name="lastName" value="{{ old('lastName') }}" required autofocus>

                                @if ($errors->has('lastName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

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

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('adress') ? ' has-error' : '' }}">
                            <label for="adress" class="col-md-4 control-label">Adress</label>

                            <div class="col-md-6">
                                <textarea name="adress" class="form-control" id="adress"></textarea>
                                @if ($errors->has('adress'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adress') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('codePostal') ? ' has-error' : '' }}">
                            <label for="codePostal" class="col-md-4 control-label">Code Postal</label>

                            <div class="col-md-6">
                                <input type="text" name="codePostal" class="form-control" value="">
                                @if ($errors->has('codePostal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('codePostal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

<form class="splash-container" method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Registrations Form</h3>
                <p>Please enter your user information.</p>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input id="civility" class="form-control form-control-lg{{ $errors->has('civility') ? ' is-invalid' : '' }}" type="text" name="civility" placeholder="Civility" autocomplete="off">
                    @if ($errors->has('civility'))
                        <div class="invalid-feedback">{{ $errors->first('civility') }}.</div>
                    @endif
                    <!-- <select class="control-form form-control-lg{{ $errors->has('civility') ? ' is-invalid' : '' }}" id="input-select" name="civility">
                        <option value="">Select Civility</option>
                        <option value="M">Monsieur</option>
                        <option value="Mme">Madame</option>
                    </select> -->
                </div>
                <div class="form-group">
                    <input id="firstName" class="form-control form-control-lg{{ $errors->has('firstName') ? ' is-invalid' : '' }}" type="text" name="firstName"  placeholder="First Name" autocomplete="off">
                    @if ($errors->has('firstName'))
                        <div class="invalid-feedback">{{ $errors->first('firstName') }}.</div>
                    @endif
                </div>
                <div class="form-group">
                    <input id="lastName" class="form-control form-control-lg{{ $errors->has('lastName') ? ' is-invalid' : '' }}" type="text" name="lastName"  placeholder="last Name" autocomplete="off">
                    @if ($errors->has('lastName'))
                        <div class="invalid-feedback">{{ $errors->first('lastName') }}.</div>
                    @endif
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email"  placeholder="E-mail" autocomplete="off">
                    @if ($errors->has('email'))
                        <div class="invalid-feedback">{{ $errors->first('email') }}.</div>
                    @endif
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="pass1" type="password"  placeholder="Password">
                    @if ($errors->has('password'))
                        <div class="invalid-feedback">{{ $errors->first('password') }}.</div>
                    @endif
                </div>
                <div class="form-group">
                    <input type="password" id="password-confirm" class="form-control form-control-lg" name="password_confirmation"  placeholder="Confirm">
                </div>
                <div class="form-group">
                    <textarea name="adress" class="form-control form-control-lg{{ $errors->has('adress') ? ' is-invalid' : '' }}" id="adress" placeholder="Adress"></textarea>
                    @if ($errors->has('adress'))
                        <div class="invalid-feedback">{{ $errors->first('adress') }}.</div>
                    @endif
                </div>
                <div class="form-group">
                    <input id="codePostal" type="text" name="codePostal" class="form-control form-control-lg{{ $errors->has('codePostal') ? ' is-invalid' : '' }}" placeholder="Code Postal">
                    @if ($errors->has('codePostal'))
                        <div class="invalid-feedback">{{ $errors->first('codePostal') }}.</div>
                    @endif
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit">Register My Account</button>
                </div>
                <!-- <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox"><span class="custom-control-label">By creating an account, you agree the <a href="#">terms and conditions</a></span>
                    </label>
                </div> -->
                <!-- <div class="form-group row pt-0">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                        <button class="btn btn-block btn-social btn-facebook " type="button">Facebook</button>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <button class="btn  btn-block btn-social btn-twitter" type="button">Twitter</button>
                    </div>
                </div> -->
            </div>
            <div class="card-footer bg-white">
                <p>Already member? <a href="{{ route('login') }}" class="text-secondary">Login Here.</a></p>
            </div>
        </div>
    </form>
@endsection
