<!DOCTYPE html>
 <html>

 <head>
     <meta charset="UTF-8">
     <link href="{{ URL::asset('/css/layout.css') }}" rel="stylesheet">
     <script type="text/javascript" src="{{URL::asset('/js/changeAssingView.js')}}"></script>
     <title>Laravel</title>
 </head>

 <body>
  
     <div class="page"> <!--page-->
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
     </div> <!--/page--> 
 </body>
 </html>