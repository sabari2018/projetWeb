<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Allo Docteur</title>

    <link href="{{asset('vendor/frontEnd/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendor/frontEnd/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/frontEnd/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/frontEnd/css/overwrite.css')}}">
    <link href="{{asset('vendor/frontEnd/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/frontEnd/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset("vendor/vendor/fontawesome-free/css/all.min.css")}}" rel="stylesheet" type="text/css">

</head>
<body>

    @include('front._header')
    @yield('content')
    @include('front._footer')



    <script src="{{asset('vendor/frontEnd/js/jquery-2.1.1.min.js')}}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{asset('vendor/frontEnd/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendor/frontEnd/js/parallax.min.js')}}"></script>
    <script src="{{asset('vendor/frontEnd/js/wow.min.js')}}"></script>
    <script src="{{asset('vendor/frontEnd/js/jquery.easing.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/frontEnd/js/fliplightbox.min.js')}}"></script>
    <script src="{{asset('vendor/frontEnd/js/functions.js')}}"></script>
    <script src="{{asset('vendor/frontEnd/contactform/contactform.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <script src="{{asset('vendor/js/frontOffice.js')}}"></script>
    <script>
        refrecheCaptcha('{{route('refresh_captcha')}}');
    </script>


</body>
</html>