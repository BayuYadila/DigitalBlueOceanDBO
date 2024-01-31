<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- css connect -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
      
    <!-- font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&display=swap" rel="stylesheet">
      
    <!-- Logo Tittle -->
    <link rel="icon" href="{{ asset('assets/logo_DBOTulisanBawah.svg') }}" type="image/svg+xml">
    <title>Digital Blue Ocean</title>
  </head>
  <body>
    {{-- Navbar --}}
    @include('partials.bar.navbar')
    
    <!-- Dashboard Contents -->
    <div class="container-bg2">

      @yield('container-bg2')
    
    </div>
    
    {{-- Footer --}}
    @include('partials.bar.footer')
    
    <!-- Bootstrap JS-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
  </body>
</html>