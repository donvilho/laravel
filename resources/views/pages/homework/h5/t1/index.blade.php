@extends('layouts.homework')

@section('content-right')


        <div class="content-item">
        <h1>Tehtävä 1 [8p]</h1>
            <h3>MS Azure-palvelin</h3>
            <div>
                <p>Azuren palvelimelle pamautettiin Laravel niin että heilahti, 
                    en hoksannut kuvia ottaa prosessista mutta eiköhän osoite 
                    kerro että homma toimii. ps. ip vaihtui kun jouduin deployaamaan palvelimen 
                    uudestaan koska hölmönä menin päivttämään Ubuntun 20.x versioon ja silloin kilahti.</p>
            </div>
            <p>Tässä kuva phpAdministä</p>
            <div class="center">
                <img src="{{url('images/h5/myphp.png')}}" alt="Pic" class="center"><br><br>
            </div>
            
            <h3>Xampp</h3>
            <div>
                <p>Ei erikoista kommentoitavaa tästä prosessista.</p>
            </div>
            <div class="center">
                <img src="{{url('images/h5/composer2.png')}}" alt="Pic" class="center"><br><br>
            </div>
            <div class="center">
                <img src="{{url('images/h5/composer3.png')}}" alt="Pic" class="center"><br><br>
            </div>
        </div>
    
@endsection