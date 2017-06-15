<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default') | Panel de Administracion</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/base-admin-responsive.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.min.css') }}">
	<link rel="stylesheet" href="{{ asset('http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600') }}">
	<link rel="stylesheet" href="{{ asset('css/pages/dashboard.css') }}">

</head>
<body>
@include('admin.template.partials.nav')
@include('admin.template.partials.subnav')

<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span6">
          <div class="widget widget-nopad">

          <section>
		@yield('content')
	</section>

          </div>
          </div>
          </div>
          </div>
          </div>
          </div>



</body>
</html>