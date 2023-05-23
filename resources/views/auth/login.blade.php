@extends('layouts.app_plain')
@section('title','Login')

@section('css')
<style>

</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center align-content-center vh-100">
        <div class="col-md-4">
            <div class="card" style="height: 500px;">
                <div class="card-body">
                    <!-- Pills navs -->
                    <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                        <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="{{route('login')}}" role="tab"
                            aria-controls="pills-login" aria-selected="true">Login</a>
                        </li>
                        <li class="nav-item" role="presentation">
                        <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="{{route('register')}}" role="tab"
                            aria-controls="pills-register" aria-selected="false">Register</a>
                        </li>
                    </ul>
                    <!-- Pills navs -->

                    <!-- Pills content -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="text-center mb-3">
                                    <p>Sign in with:</p>
                                    <button type="button" class="btn-primary btn btn-link btn-floating mx-1">
                                        <i class="fab fa-facebook-f text-white"></i>
                                    </button>

                                    <button type="button" class="btn-primary btn btn-link btn-floating mx-1">
                                        <i class="fab fa-google text-white"></i>
                                    </button>

                                    <button type="button" class="btn-primary btn btn-link btn-floating mx-1">
                                        <i class="fab fa-twitter text-white"></i>
                                    </button>

                                    <button type="button" class="btn-primary btn btn-link btn-floating mx-1">
                                        <i class="fab fa-github text-white"></i>
                                    </button>
                                </div>

                                <p class="text-center">or</p>

                                <!-- Email input -->
                                <div class="form-outline border-bottom">
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

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block my-4">Sign in</button>

                                <!-- Register buttons -->
                                <div class="text-center">
                                    <p>Not a member? <a href="{{route('register')}}">Register</a></p>
                                </div>
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
