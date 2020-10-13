@extends('layouts.app')

@section('content')
    <div class="content_left">
        @include('include.homework')
    </div>

    <div class="content_right">
        <h1>Tehtävä 2 [6p]</h1>
        <div class="homeworkText">
            <p>Sorruin hieman värkkäämiseen tämän sivun kanssa ja meinasi tehtävät unohtua. Toivottavasti tein kaikki vaaditut tehtävät.</p>
        </div>
        <img src="{{url('images/h5/img1.png')}}" alt="Pic" class="center"><br><br>
        <img src="{{url('images/h5/img2.png')}}" alt="Pic" class="center"><br><br>
        <img src="{{url('images/h5/img3.png')}}" alt="Pic" class="center"><br><br>
        <img src="{{url('images/h5/img4.png')}}" alt="Pic" class="center"><br><br>
        <img src="{{url('images/h5/img5.png')}}" alt="Pic" class="center"><br><br>
    </div>
@endsection