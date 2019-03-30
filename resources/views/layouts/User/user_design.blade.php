<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/backend_css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/backend_css/sweetalert.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/backend_css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/backend_css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <link rel="stylesheet" href="{{ asset('css/backend_css/skins/skin-blue.min.css') }}">



 
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 @include('layouts.User.user_header')
 
 @include('layouts.User.user_sidebar')

 @yield('content')

@include('layouts.User.user_footer')
 



<script src="{{ asset('js/backend_js/jquery.min.js') }}"></script>

<script src="{{ asset('js/backend_js/bootstrap.min.js') }}"></script>

<script src="{{ asset('js/backend_js/matrix.form_validation.js') }}"></script>
<script src="{{ asset('js/backend_js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/backend_js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('js/backend_js/sweetalert.min.js') }}"></script>
<script src="{{ asset('js/backend_js/adminlte.min.js') }}"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script>
   $(document).ready(function(){
      $('.carousel').carousel({
        interval: 5000
      })
    });    

  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

</body>
</html>