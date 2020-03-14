<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="google-site-verification" content="LxHKqj-7LHr4nr1F8SSnd7J2_vI1H0lgTg2s1hb-t7A" />
    <title>Project Laravel</title>
    <link rel="stylesheet" href="/laravel/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/laravel/public/css/jonathan.css">

  </head>
  <body>
    <div class="container">
      @include('layouts.navigation')
      <div style="background-color:#FFF;">
        
      </div>
      <div id="ContentPrincipal">
        @yield('content')
      </div>
      <div id="FooterPrincipal">
        @include('layouts.footer')    
      </div>
      
    </div> 
  </body>
</html>
