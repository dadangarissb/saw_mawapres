<!DOCTYPE html>
<html>
<head>
  <title>SPK Mawapres</title>
  <link rel="stylesheet" href="{{ asset('templates/user/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
<header class="main-header" style="margin-bottom: 20px;">
@include('user.partials.v_navbar')
</header>
<div class="container">
@yield('content')
</div>
</body>
</html>