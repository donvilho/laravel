<!DOCTYPE html>
 <html>

 <head>
     <meta charset="UTF-8">
     <link href="{{ URL::asset('/css/layout.css') }}" rel="stylesheet">
     <link href="{{ URL::asset('/css/navbar.css') }}" rel="stylesheet">
     <link href="{{ URL::asset('/css/footer.css') }}" rel="stylesheet">
     <link href="{{ URL::asset('/css/header.css') }}" rel="stylesheet">
     <link href="{{ URL::asset('/css/content-grid.css') }}" rel="stylesheet">
     <title>Laravel</title>
 </head>

 <body>

    <div class="navbar"> <!--navbar-->   
        @include('include.navbar')
    </div>

    <div class="header"> <!--header-->
        @include('include.header')
    </div>
  
    <div class="content"> <!--content-->
        @yield('content')
    </div>

    <div class ="footer"> <!--footer-->
        @include('include.footer')
    </div>

 </body>
 </html>