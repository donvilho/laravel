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
                <input type="text" name="code" placeholder="Try again">
                <button type="submit">Hae</button>
            </form>
            

            @if(is_array($matches) && count($matches) > 0)
                @foreach ($matches as $match)
                    <p><b style="color:green">Kelpaa! </b>{{$match}}</p> 
                @endforeach
            @else
            <p><b style="color:red">Ei kelpaa! </b>{{$matches}}</p> 
            @endif
        </div>
    </div>
</div>




@endsection