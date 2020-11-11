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
                <p>Käytännössä sama linkki ku
                <br>
                <a href="{{url('/student')}}" target="_blank"><b>Studetronic</b></a>
                <br>

            </div>
               <h1>Tehtävä 2 [5p]</h1>
               <h3>Pagination</h3>
            <div>
                <p>Tuonne taulukon loppuun kun pamautti students->links() nii saatiin näkyviin sivut</p>
                <div class="center">
                <div class="zoom"><img src="{{url('images/h8/3.png')}}" alt="Pic" class="center"></div> 
                </div>
                <br>
                 <div class="center">
                <div class="zoom"><img src="{{url('images/h8/4.png')}}" alt="Pic" class="center"></div> 
                </div>
                <br>
            </div>
                 <h1>Tehtävä 3 [5p]</h1>
               <h3>Kurssit</h3>
            <div>
                <p>Tuo materiaalin haku oli melkein valmis, piti vain vaihtaa where->course.id = $id ja pientä muutosta foreach looppiin</p>
                <div class="center">
                <div class="zoom"><img src="{{url('images/h8/2.png')}}" alt="Pic" class="center"></div> 
                </div>
                <br>
                 <div class="center">
                <div class="zoom"><img src="{{url('images/h8/1.png')}}" alt="Pic" class="center"></div> 
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
    
@endsection