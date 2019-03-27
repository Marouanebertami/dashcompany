@extends('layouts.dash')

@section('title')
    Profile
@endsection

@section('content')
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">{{ Auth::user()->civility }}. {{ Auth::user()->firstName }} {{ Auth::user()->lastName }}</h2>
                            <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
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
                            <h5 class="card-header">Profile Update</h5>
                            <div class="card-body">
                                <form action="{{ route('update') }}" method="post">
                                  {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="civility">Civility</label>
                                        <input type="text" class="form-control" name="civility" placeholder="Civility" value="{{ $user['civility'] }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="firstName">First Name</label>
                                        <input type="text" class="form-control" name="firstName" value="{{ $user['firstName'] }}" placeholder="First Name" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" class="form-control" name="lastName" value="{{ $user['lastName'] }}" placeholder="Last Name" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" name="email" value="{{ $user['email'] }}" placeholder="Email" autocomplete="off">
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div> -->
                                    <div class="form-group">
                                        <label for="adress">Adress</label>
                                        <textarea name="adress" class="form-control" id="adress" placeholder="Adress">{{ $user['adress'] }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="codePostal">Code Postal</label>
                                        <input type="text" class="form-control" name="codePostal" value="{{ $user['codePostal'] }}" placeholder="Code Postal" autocomplete="off">
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
