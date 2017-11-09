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
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center mx-auto mt-5 "><!--col-sm-4 üste geliyor-->
            <img src="{{ asset('/resources/assets/media/logo_2x.png')}}" data-src="/resources/assets/media/logo.png" data-src-retina="/resources/assets/media/logo_2x.png" width="147" height="33" alt="Logo">
        </div>
      </div>
      @yield('content')
   </div>
</body>
</html>
