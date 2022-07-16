
<!DOCTYPE HTML>
<html lang="pt-BR">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="google-signin-client_id" content="212513437409-qgj6ig66pgj7n9gfanr7rh8483bl0oln.apps.googleusercontent.com">
<title>Aluga-SC</title>
<!-- CSS only -->
<link rel="stylesheet" href="{{asset("css/Bootstrap/bootstrap.css")}}">
<link rel="stylesheet" href="{{asset("css/main.css")}}" >
<link href='{{ asset('css/calendar/daterangepicker.css') }}' rel='stylesheet' />

<script  src="{{asset('js/Jquery/jquery.js')}}"></script>
<script  src="{{asset('js/Bootstrap/bootstrap.js')}}" ></script>
<script  src='{{asset('js/calendar/moment.min.js') }}'></script>
<script  src='{{asset('js/calendar/daterangepicker.js') }}'></script>
<script  src="{{asset('js/Jquery/jquery.mask.min.js')}}"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<!-- JavaScript SweetAlert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- JavaScript Font Awesome icons -->
<script src="https://kit.fontawesome.com/7bfbda1166.js" crossorigin="anonymous"></script>
</head>
<body>

@include('Default.header')
@yield('content')
@include('Default.footer')
@include('Default.login')
@include('Default.register')
</body>

<script type="text/javascript" src="{{asset('js/Default/Header/main.js')}}"></script>

</html>