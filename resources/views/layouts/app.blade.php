<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Genkk</title>

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <link href="https://unpkg.com/bootstrap@4.0.0/dist/css/bootstrap.css" rel="stylesheet" />
<link href="https://unpkg.com/font-awesome@4.7.0/css/font-awesome.min.css" rel="stylesheet" />

</head>

<body>

    @include('layouts.navbar')

    <main class="main bg-white">
        @yield('content')
    </main>

<script src="https://unpkg.com/jquery@3.3.1/dist/jquery.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

{{-- <script src="https://unpkg.com/jquery@3.3.1/dist/jquery.js"></script> --}}
<script src="https://unpkg.com/popper.js@1.12.9/dist/umd/popper.js"></script>
{{-- <script src="https://unpkg.com/bootstrap@4.0.0/dist/js/bootstrap.js"></script> --}}


<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
