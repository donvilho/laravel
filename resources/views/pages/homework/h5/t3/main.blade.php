@extends('layouts.homework')

@section('content-right')


            <div class="content-item center">
                <div class="container">
        
                    <style scoped>
                        <?php include 'css/h5/style.css';?>
                    </style>
            
                    @include('pages.homework.h5.t3.nav')
                    <h2>OstosKoriTori</h2>
                    <div class="boxi">
                        @yield('subcontent')
                    </div>
              
                </div>      
          </div>
@endsection

