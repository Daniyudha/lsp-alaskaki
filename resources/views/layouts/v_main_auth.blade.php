<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title') - {{ getenv('APP_NAME') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicons -->
  <link href="{{ asset('home_assets') }}/img/logo-lsp.png" rel="icon">
  <link href="{{ asset('home_assets') }}/img/logo-lsp.png" rel="apple-touch-icon">

    <!-- Bootstrap Css -->
    <link href="{{ asset('dashboard_assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('dashboard_assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('dashboard_assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-primary bg-pattern">
<div class="home-btn d-none d-sm-block">
    <a href="{{ url('/') }}"><i class="mdi mdi-home-variant h2 text-white"></i></a>
</div>
@if(\Illuminate\Support\Facades\Session::has('message'))
    {!! \Illuminate\Support\Facades\Session::get('message') !!}
@endif

@yield('contents')

<!-- JAVASCRIPT -->
<script src="{{ asset('dashboard_assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/libs/node-waves/waves.min.js') }}"></script>

<script src="{{ asset('dashboard_assets/js/app.js') }}"></script>

</body>
</html>
