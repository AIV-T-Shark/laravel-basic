@extends('admin.login.layout')

@section('content')

        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
            <div class="col-lg-6">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                    </div>
                    <form class="user" action="{{ route('admin.login.postLogin') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Login
                        </button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="#">Forgot Password?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="#">Create an Account!</a>
                    </div>
                </div>
            </div>
        </div>

@endsection