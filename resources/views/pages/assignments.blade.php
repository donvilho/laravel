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
                <h1>Vastaus</h1>
                <p>Tehtävän vastaus tulostetaan tähän tai avataan erilliselle sivulle</p>
            </div>
        </div>
    </div>
    
@endsection