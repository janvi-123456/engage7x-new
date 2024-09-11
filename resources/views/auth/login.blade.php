@extends('authLayout.app')

@section('content')
    <div class="half position-relative ">
        <img class="position-absolute z-1 logo-absolute" src="{{asset('./assets/images/Login/main logo.png')}}" alt="">
        <div class="d-none d-lg-flex justify-content-center align-items-center col-lg-5 ">
            <img class="" height="410" width="410" src="{{asset('./assets/images/Login/login svg.png')}}" alt="">

        </div>
        <div class="contents position-relative col-12 col-lg-7 d-flex align-items-center">
            <img class="position-absolute bottom-0 z-1 elements2" src="{{asset('./assets/images/Login/elements2.svg')}}" alt="">
            <img class="position-absolute top-0 end-0" src="{{asset('./assets/images/Login/elements1.svg')}}" alt="">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8">
                        <h3 class="mb-4 h2 fw-bolder">Join us to cultivate your business's success!</h3>
                        <form class="pt-4" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group last mb-3">
                                <div class="form-group first mb-3">
                                    <label for="username">E - Mail or Phone Number</label>
                                    <input type="text" class="form-control" placeholder="Enter Your E-Mail / Phone Number" name="email" id="username"
                                           required>
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group last mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter Your Password" id="password" required>
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="d-flex mb-4 align-items-center">
                                    <label class="control control--checkbox mb-0">
                                        <input type="checkbox" checked="checked">
                                        <span class="ms-2">Remember me</span>
                                    </label>
                                    <span class="ms-auto"><a href="{{route('password.request')}}" class="forgot-pass">Forgot Password</a></span>
                                </div>
                                <div class="d-flex flex-column flex-sm-row pt-4 align-items-center gap-4">
                                    <button type="submit" class="btn rounded-5 btn-primary btn-block">Login</button>
                                    <p class="p-0 m-0">Already have an account? <a href="{{route('register')}}" class="primary-text">Sign In</a></p>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
