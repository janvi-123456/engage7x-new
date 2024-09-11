@extends('authLayout.app')

@section('content')
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Reset Password') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    <form method="POST" action="{{ route('password.email') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Send Password Reset Link') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="half position-relative ">
    <img class="position-absolute z-1 logo-absolute" src="{{asset('assets/images/Login/main logo.png')}}" alt="">
    <div class="d-none d-lg-flex justify-content-center align-items-center col-lg-5 ">
        <img class="" height="410" width="410" src="{{asset('./assets/images/Login/forgot password.png')}}" alt="">

    </div>
    <div class="contents position-relative col-12 col-lg-7 d-flex align-items-center">
        <img class="position-absolute bottom-0 z-1 elements2" src="{{asset('./assets/images/Login/elements2.svg')}}" alt="">
        <img class="position-absolute top-0 end-0" src="{{asset('./assets/images/Login/elements1.svg')}}" alt="">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8">
                    <h3 class="mb-4 h2 fw-bolder">Forgot your password!</h3>

                    <form method="POST" action="{{ route('password.email') }}" class="pt-4">
                        @csrf
                        <div class="form-group last mb-3">
                            <div class="form-group first mb-3">
                                <label for="username">E - Mail Address</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="d-flex flex-column flex-sm-row pt-4 align-items-center gap-4">
                                <button type="submit" class="btn rounded-5 btn-primary btn-block">Reset Password</button>
                                <p class="p-0 m-0"><a href="{{route('login')}}" class="primary-text">Back to Login</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
