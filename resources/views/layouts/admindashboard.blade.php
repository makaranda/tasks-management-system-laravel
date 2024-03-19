<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('public/assets/img/apple-icon.png') }}"/>
  <link rel="icon" type="image/png" sizes="32x32" href="{{ url('public/assets/images/favicon.png') }}" />
  <meta name="csrf-token" content="{{ csrf_token() }}"/>
  <title>Online Dubai Visa | Admin Dashboard</title>
      @include('libraries.dashboard_style')
      @stack('css')
</head>

<body class="g-sidenav-show  bg-gray-100">
    @include('components.navdashboard')
    @yield('content')
    @include('components.footerdashboard')
    @include('libraries.dashboard_script')
    @stack('scripts')

</body>
</html>
