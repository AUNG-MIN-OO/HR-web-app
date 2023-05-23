@extends('layouts.app_plain')
@section('title','Register')

@section('content')
<div class="container">
    <div class="row justify-content-center align-content-center vh-100">
        <div class="col-md-4">
            <div class="card" style="height: 500px;">
                <div class="card-body">
                    <!-- Pills navs -->
                    <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                        <li class="nav-item" role="presentation">
                        <a class="nav-link" id="tab-login" data-mdb-toggle="pill" href="{{route('login')}}" role="tab"
                            aria-controls="pills-login" aria-selected="true">Login</a>
                        </li>
                        <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="tab-register" data-mdb-toggle="pill" href="{{route('register')}}" role="tab"
                            aria-controls="pills-register" aria-selected="false">Register</a>
                        </li>
                    </ul>
                    <!-- Pills navs -->

                    <!-- Pills content -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <!-- Name input -->
                                <div class="form-outline border-bottom">
                                    <input type="name" id="name" class="form-control @error('name') is-invalid @enderror" name="name"/>
                                    <label class="form-label" for="name">Username</label>
                                </div>

                                @error('name')
                                    <span role="alert">
                                        <strong class="font-weight-bold text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror

                                <!-- Email input -->
                                <div class="form-outline border-bottom mt-4">
                                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" autocomplete="current-email"/>
                                    <label class="form-label" for="email">Email</label>
                                </div>

                                @error('email')
                                    <span role="alert">
                                        <strong class="font-weight-bold text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror

                                <!-- Password input -->
                                <div class="form-outline mt-4 border-bottom">
                                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name=password>
                                    <label class="form-label" for="password">Password</label>
                                </div>

                                @error('password')
                                    <span role="alert">
                                        <strong class="font-weight-bold text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror

                                <!-- Password-confirm input -->
                                <div class="form-outline mt-4 border-bottom">
                                    <input type="password" id="password-confirm" class="form-control @error('password-confirm') is-invalid @enderror" name=password_confirmation>
                                    <label class="form-label" for="password-confirm">password-confirm</label>
                                </div>

                                @error('password_confirmation')
                                    <span role="alert">
                                        <strong class="font-weight-bold text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror

                                <!-- Checkbox -->
                                <div class="form-check d-flex justify-content-center my-4">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
                                    aria-describedby="registerCheckHelpText" />
                                    <label class="form-check-label" for="registerCheck">
                                        I have read and agree to the terms
                                    </label>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block my-4">Register</button>
                            </form>
                        </div>
                    </div>
                    <!-- Pills content -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
