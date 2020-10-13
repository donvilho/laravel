@extends('layouts.app')

@section('content')
    <div class="content_left">
        @include('include.homework')
    </div>

    <div class="content_right">
    <h1>Tehtävä 1 [8p]</h1>
        <h3>MS Azure-palvelin</h3>
        <div class="homeworkText">
            <p>Azuren palvelimelle pamautettiin Laravel niin että heilahti, 
                en hoksannut kuvia ottaa prosessista mutta eiköhän osoite 
                kerro että homma toimii. ps. ip vaihtui kun jouduin deployaamaan palvelimen 
                uudestaan koska hölmönä menin päivttämään Ubuntun 20.x versioon ja silloin kilahti.</p>
        </div>
        <p>Tässä kuva phpAdministä</p>
        <img src="{{url('images/h5/myphp.png')}}" alt="Pic" class="center"><br><br>
        <h3>Xampp</h3>
        <div class="homeworkText">
            <p>Ei erikoista kommentoitavaa tästä prosessista.</p>
        </div>
        
        <img src="{{url('images/h5/composer2.png')}}" alt="Pic" class="center"><br><br>
        <img src="{{url('images/h5/composer3.png')}}" alt="Pic" class="center"><br><br>
    </div>
@endsection