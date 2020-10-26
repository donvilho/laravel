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
                    
                    <h1>Metahakupalvelu</h1>

                    <form method="POST" action="{{url('metapattern/{request}') }}">
                        {{ csrf_field() }}
                        <input type="text" name="str" placeholder="Mitä haetaan" require pattern="[a-zA-Z0-9]{5,30}">
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
                        <p>Huh, kiireellä tein tehtävät kun meinasivat unohtua. Olisi varmaan pitänyt tehdä edes joku Laravellin validationilla.</p>
                    </div>
                    <div class="center">
                        <div class="zoom"><img src="{{url('images/h7/t4.png')}}" alt="Pic" class="center"><br><br></div>
                    </div>
                    <div class="center">
                        <div class="zoom"><img src="{{url('images/h7/t4_1.png')}}" alt="Pic" class="center"><br><br></div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>




@endsection