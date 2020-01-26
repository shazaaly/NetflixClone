<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title> Shaza Aly Netflix Clone</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS into laravel-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard_files/css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    {{-- noty js --}}
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard_files/plugins/noty/noty.css')}}">
    <script src="{{asset('dashboard_files/plugins/noty/noty.min.js')}}"></script>

  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    @include('layouts.dashboard._header')
    <!-- Sidebar menu-->
    @include('layouts.dashboard._aside')

    <main class="app-content">



  <!-- My breadcrumb_bootstrap -->

        @yield('content')
    </main>
    @include('dashboard.partials._sessions')


    <!-- Essential javascripts for application to work-->
    <script src="{{asset('dashboard_files/js/main.js')}}"></script>
    <script src="{{asset('dashboard_files/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('dashboard_files/js/popper.min.js')}}"></script>
    <script src="{{asset('dashboard_files/js/bootstrap.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $(document).on('click','.delete', function(e){
                e.preventDefault();
                var that = $(this);
                var n = new Noty({
                    text:' Confirm Delete? ',
                    killer:true,
                    buttons:[
                        Noty.button('YES', 'btn btn-danger btn-sm  mr-2', function(){
                            that.closest('form').submit()
                        }),
                        Noty.button('NO','btn btn-info btn-sm',function(){
                            n.close();
                        }),
                    ]

                })  //end of var n
                n.show();
            });  //end of onclick

       /* $('.select2').select2();*/
      /* $('.selectpicker').selectpicker();*/


        });  //end of ready fn
    </script>

      </body>
</html>
