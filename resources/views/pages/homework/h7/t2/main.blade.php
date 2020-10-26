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
                    
                    <h1>Anna päivämäärä</h1>

                    <form method="POST" action="{{url('date/{code}') }}">
                        {{ csrf_field() }}
                        <input type="text" name="code" placeholder="1999-09-09">
                        <button type="submit">Hae</button>
                    </form>
                    <br>

                </div>
            </div>

            <div class="item-right">
                <div class="content-item">
                    <br>
                    <div class="center">
                        <div class="zoom"> <img src="{{url('images/h7/t2.png')}}" alt="Pic" class="center"><br><br></div>
                       
                    </div>
                    <div class="center">
                        <div class="zoom"><img src="{{url('images/h7/t2_1.png')}}" alt="Pic" class="center"><br><br></div>
                    
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>




@endsection