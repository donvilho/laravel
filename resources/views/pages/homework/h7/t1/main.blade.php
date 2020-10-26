@extends('layouts.app')
@section('content')



<div class="content-grid">

    <div class="left">
        <div class="content-item">
            @include('include.homework')
        </div>
    </div>

    <div class="right">

        <div class="item-grid">
            <div class="item-left">
                <div class="content-item">


                    <h1>Testaa kelpaako koodisi!</h1>
                    <p>RegExp: (^[0-9]{5}$|^[0-9]{5}-[0-9]{4}$)</p>

                    <form method="POST" action="{{url('regexp/{code}') }}">
                        {{ csrf_field() }}
                        <input type="text" required name="code" placeholder="12345-1234">
                        <button type="submit">Hae</button>
                    </form>
                    <br>

                </div>
            </div>

            <div class="item-right">
                <div class="content-item">
                    <br>
                    <div class="center">
                        <div class="zoom">
                             <img src="{{url('images/h7/regexp.png')}}" alt="Pic" class="center"><br><br>
                        </div>
                       
                    </div>
                    <div class="center">
                        <div class="zoom"><img src="{{url('images/h7/regexp1.png')}}" alt="Pic" class="center"><br><br></div>
                        
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>




@endsection