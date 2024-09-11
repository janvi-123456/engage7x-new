<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('authLayout.head')
    @stack('head_script')
</head>

<body>
    <div id="app">
            @yield('content')
    </div>
    <script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <!--plugins-->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <!--plugins-->
    <script src="{{asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('assets/plugins/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bs-stepper/js/main.js')}}"></script>
    <script src="{{asset('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
