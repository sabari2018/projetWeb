<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>Allo Docteur - Dashbord</title>


    <link href="{{asset("vendor/vendor/fontawesome-free/css/all.min.css")}}" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


    <link href="{{asset('vendor/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/css/custom.css')}}" rel="stylesheet">

</head>

<body id="page-top">

   <div id="wrapper">

           @include('backend.layouts._side')

           <div id="content-wrapper" class="d-flex flex-column">
               <div id="content">
                   @include('backend.layouts._topBarre')
                   <div class="container-fluid">
                        @include('backend.layouts._headingPage')
                        @yield('content')
                   </div>

               </div>

            @include('backend.layouts._footer')
       </div>
   </div>

<script src="{{asset('vendor/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


<script src="{{asset('vendor/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

>
<script src="{{asset('vendor/js/sb-admin-2.min.js')}}"></script>


<script src="{{asset('vendor/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>


<script src="{{asset('vendor/js/demo/datatables-demo.js')}}"></script>

<script src="https://cdn.tiny.cloud/1/rs0nsff07mb0zouslcn4r3il9ic6gk9buobsjxojjvyl2y29/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

 <script src="{{asset('vendor/js/custom.js')}}"></script>
    <script>
        let url = '{{route('autocomplete.fetch')}}';
        autocomplate(url);
    </script>

</body>

</html>
