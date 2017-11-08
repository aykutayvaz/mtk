<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>@yield('title')</title>
  {{ HTML::style('vendor/bootstrap/css/bootstrap.min.css')}}
  {{ HTML::style('vendor/font-awesome/css/font-awesome.min.css')}}

  <!-- Bootstrap core CSS-->
  <!--<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
  <!-- Custom fonts for this template-->
    <!--<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->

</head>

<body class="bg-dark">
  <!--Bu master-->
  @yield('content')
</body>
</html>
