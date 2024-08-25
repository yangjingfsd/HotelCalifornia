<!DOCTYPE html>
<html lang="en" data-mdb-theme="dark">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Hotel Calfornia (FSD11 final project)</title>
    <!-- MDB icon -->
    <link rel="icon" href="{{ asset('styles/img/favicon.ico') }}" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('styles/css/mdb.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('styles/css/appointment.css') }}" />
  </head>
  <body>
    <!-- Start your project here-->

@include('navbar')

@yield('content')

@include('footer')

    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('styles/js/mdb.umd.min.js') }}"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
