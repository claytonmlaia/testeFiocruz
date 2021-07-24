<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Teste Fiocruz') }}</title>

    <!-- Scripts -->
    <script>
        window.App = {!! json_encode([
            'csrfToken' => csrf_token(),
            'user' => Auth::user(),
            'signedIn' => Auth::check()
        ]) !!};
    </script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/startPageScript.js') }}"></script>

@yield('startPageScript')

<!-- Styles -->
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!-- App core CSS-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{ asset('fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="{{ asset('datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">


</head>

<body id="page-top">
@include('flash::message')

<!-- Page Content -->
@yield('title')

@yield('content')

@yield('control')

<!-- Flash Msgs-->
<script>
    $('#flash-overlay-modal').modal();
    $('div.alert').not('.alert-important').delay('{{ Config::get('app.alertDelay') }}').fadeOut('{{ Config::get('app.alertFadeOut') }}');
</script>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('jquery/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/endPageScript.js') }}"></script>
@yield('endPageScript')
</body>

</html>
