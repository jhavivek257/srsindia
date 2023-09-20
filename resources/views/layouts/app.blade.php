
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Login</title>
    <link rel="shortcut icon" href="{{ asset('backend/assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/icons/flags/flags.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
    {{-- message toastr --}}
	<link rel="stylesheet" href="{{ asset('backend/assets/css/toastr.min.css') }}">
	<script src="{{ asset('backend/assets/js/toastr_jquery.min.js') }}"></script>
	<script src="{{ asset('backend/assets/js/toastr.min.js') }}"></script>
</head>

<body>
    <style>    
        .invalid-feedback{
            font-size: 14px;
        }
    </style>
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        <img class="img-fluid" src="{{ asset('backend/assets/img/login.png') }}" alt="Logo">
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('backend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/feather.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/script.js') }}"></script>
</body>

</html>
