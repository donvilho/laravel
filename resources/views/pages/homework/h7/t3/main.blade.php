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
                    
                    <h1>Metahaku</h1>

                    <form method="POST" action="{{url('metahaku/{str}') }}">
                        {{ csrf_field() }}
                        <input type="text" name="str" placeholder="Mitä haetaan">
                        <select required name="list">
                            <option value="Google">Google</option>
                            <option value="Bing">Bing</option>
                        </select>
                        <button type="submit">Hae</button>
                    </form>
                    <br>

                </div>
            </div>

            <div class="item-right">
                <div class="content-item">
                    <div class="center">
                        <img src="{{url('images/h7/t3_0.png')}}" alt="Pic" class="center"><br><br>
                    </div>
                    <div class="center">
                        <img src="{{url('images/h7/t3_1.png')}}" alt="Pic" class="center"><br><br>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>




@endsection