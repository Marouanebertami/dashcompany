@extends('layouts.dash')

@section('title')
    Mot de passe
@endsection

@section('content')

  <div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="page-header">
                      <h2 class="pageheader-title">Mot de Passe</h2>
                      <p class="pageheader-text"></p>
                      <div class="page-breadcrumb">
                          <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">Profil</li>
                              </ol>
                          </nav>
                      </div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Modifier Mot de passe</h5>
                        <div class="card-body">
                          <form action="{{ route('passwordupdate') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="password_old">Ancien Mot de passe</label>
                                <input type="password" id="password_old" class="form-control{{ $errors->has('password_old') ? ' is-invalid' : '' }}" name="password_old" placeholder="Ancien Mot de passe">
                                @if ($errors->has('password_old'))
                                    <div class="invalid-feedback">{{ $errors->first('password_old') }}.</div>
                                @endif
                                @if ($errors->has('pw_old'))
                                    <div class="invalid-feedback">{{ $errors->first('pw_old') }}.</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password">Nouveau Mot de passe</label>
                                <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" id="password" name="password" placeholder="Nouveau Mot de passe">
                                @if ($errors->has('password'))
                                    <div class="invalid-feedback">{{ $errors->first('password') }}.</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password_cnf">confirmation Mot de passe</label>
                                <input class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" type="password" id="password_cnf" name="password_confirmation" placeholder="Nouveau Mot de passe">
                                @if ($errors->has('password_confirmation'))
                                    <div class="invalid-feedback">{{ $errors->first('password_confirmation') }}.</div>
                                @endif
                            </div>
                            <p class="text-right">
                                <input type="submit" class="btn btn-space btn-primary" value="Save">
                            </p>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>


@endsection
