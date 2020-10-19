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


            <h1>Testaa kelpaako koodisi!</h1>
            <p>RegExp: (^[0-9]{5}$|^[0-9]{5}-[0-9]{4}$)</p>

            <form method="POST" action="{{url('regexp/{code}') }}">
                {{ csrf_field() }}
                <input type="text" name="code" placeholder="Give code">
                <button type="submit">Hae</button>
            </form>
            <br>

        </div>
    </div>
</div>




@endsection