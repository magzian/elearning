<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <!--favicon-->
    <link rel="icon" href="{{asset('dashboard/assets/images/favicon-32x32.png')}}"  type="image/png">
    <!-- loader-->
	<link href="{{asset('dashboard/assets/css/pace.min.css')}}" rel="stylesheet">
	<script src="{{asset('dashboard/assets/js/pace.min.js')}}"></script>

    <!--plugins-->
    <link href="dashboard/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/plugins/metismenu/metisMenu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/plugins/metismenu/mm-vertical.css')}} ">
<link rel="stylesheet" type="text/css" href=" {{asset('dashboard/assets/plugins/simplebar/css/simplebar.css')}}">
    <!--bootstrap css-->
    <link href="{{asset('dashboard/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <!--main css-->
    <link href="{{asset('dashboard/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
    <link href="{{asset('sass/main.css')}}" rel="stylesheet">
    <link href="{{asset('sass/dark-theme.css')}}" rel="stylesheet">
    <link href="{{asset('sass/blue-theme.css')}}" rel="stylesheet">
    <link href="{{asset('sass/semi-dark.css')}}" rel="stylesheet">
    <link href="{{asset('sass/bordered-theme.css')}}" rel="stylesheet">
    <link href="{{asset('sass/responsive.css')}}" rel="stylesheet">        

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>


        {{-- {{ $slot }} --}}

        <div class="container">
            @yield('content')
        </div>

        <!--bootstrap js-->
    <script src=" {{asset('dashboard/assets/js/bootstrap.bundle.min.js')}}"></script>

    <!--plugins-->
    <script src=" {{asset('dashboard/assets/js/jquery.min.js')}} "></script>
    <!--plugins-->
    <script src=" {{asset('dashboard/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <script src=" {{asset('dashboard/assets/plugins/metismenu/metisMenu.min.js')}} "></script>
    <script src=" {{asset('dashboard/assets/plugins/apexchart/apexcharts.min.js')}} "></script>
    <script src=" {{asset('dashboard/assets/plugins/simplebar/js/simplebar.min.js')}} "></script>
    <script src=" {{asset('dashboard/assets/plugins/peity/jquery.peity.min.js')}} "></script>
    <script>
        $(".data-attributes span").peity("donut")
    </script>
    <script src=" {{asset('dashboard/assets/js/main.js')}}"></script>
    <script src=" {{asset('dashboard/assets/js/dashboard1.js')}}"></script>
    <script>
        new PerfectScrollbar(".user-list")
    </script>
    </body>
</html>