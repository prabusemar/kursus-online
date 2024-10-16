<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <style>
        /* Custom Theme Colors */
        body {
            background-color: #252422;
            color: #fffcf2;
        }

        .login-box {
            background-color: #f4f4f4;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card-outline.card-primary {
            border-top: 3px solid #BD562D;
        }

        .card-header {
            background-color: #BD562D;
            color: #fffcf2;
        }

        .card-header a {
            color: #fffcf2;
        }

        .card-body {
            background-color: #f4f4f4;
            color: #252422;
        }

        .btn-primary {
            background-color: #BD562D;
            border-color: #BD562D;
        }

        .btn-primary:hover {
            background-color: #eb5e28;
            border-color: #eb5e28;
        }

        .form-control {
            background-color: #fffcf2;
            border-color: #ccc5b9;
            color: #252422;
        }

        .form-control:focus {
            background-color: #fffcf2;
            border-color: #eb5e28;
            color: #252422;
        }

        .input-group-text {
            background-color: #fffcf2;
            border-color: #ccc5b9;
            color: #252422;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ route('home') }}" class="h1">
                    <img src="{{ asset('PPLG.png') }}" alt="" width="70px">
                    SmartLearn
                </a>
            </div>
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>

</html>
