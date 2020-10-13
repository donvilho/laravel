@extends('layouts.app')

@section('content')
    <div class="content_left">
        @include('include.homework')
    </div>

    <div class="content_right">
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

@endsection

