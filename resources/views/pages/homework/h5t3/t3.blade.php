@extends('layouts.app')

@section('content')

    <div class="content-grid">

        <div class="left">
            
    <div class="content-item">
        @include('include.homework')
    </div>

        </div>

        <div class="right">
            <div class="content-item">
                <div class="container">
        
                    <style scoped>
                        <?php include 'css/h5/style.css';?>
                    </style>
            
                    @include('pages.homework.h5t3.nav')
                    <h2>OstosKoriTori</h2>
                    <div class="boxi">
                        @yield('subcontent')
                    </div>
              
                </div>       
            </div>
        </div>
    </div>
@endsection

