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
        <h1>Tehtävä 1 [15p]</h1>
            <div>
                <p>Käytännössä sama linkki kun tehtävän 8
                <br>
                <a href="{{url('/student')}}" target="_blank"><b>Studetronic</b></a>
                <br>
                </div>
        </div>
    </div>
</div>
    
@endsection