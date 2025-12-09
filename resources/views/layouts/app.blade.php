<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Basera Constructions & Tubewells')</title>

    <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0CLVTTEQFC"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-0CLVTTEQFC');
  </script>
  
    <link rel="icon" type="image" href="{{ asset('images/logo.png') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
      <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

  <!--   <meta name="csrf-token" content="{{ csrf_token() }}"> -->
 
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    
    <!-- Navbar include hoga yaha -->
    @include('partials.navbar')
    
    <!-- Main content yaha show hoga -->
    @yield('content')
    
    <!-- Footer include hoga yaha -->
    @include('partials.footer')
    
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    


    
    <!-- Custom JS -->
    <script src="{{ asset('js/script.js') }}"></script>

    <script>
    $(document).ready(function() {
        $('#serviceSelect').select2({
            placeholder: "Search or Select a Service",
            allowClear: false,
            width: '100%'
        });
    });
</script>
    @yield('scripts');
</body>
</html>