
<!DOCTYPE HTML>
<html lang="pt-BR">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Aluga-SC</title>
<!-- CSS only -->
<link rel="stylesheet" href="{{asset("css/Bootstrap/bootstrap.css")}}">
<link rel="stylesheet" href="{{asset("css/main.css")}}" >
<script  src="{{asset('js/Jquery/jquery.js')}}"></script>
<script  src="{{asset('js/Bootstrap/bootstrap.js')}}" ></script>

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