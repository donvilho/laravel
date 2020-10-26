@extends('layouts.homework')
@section('content-right')


<div class="item-grid">
    <div class="item-left">

        <div class="content-item">
            <h1>Users</h1>
            <div class="center ">
                <style scoped>
                    table {
                        border-collapse: collapse;
                        background-color: white;
                    }

                    table,
                    td,
                    th,
                    tr {
                        border: 1px solid black;
                    }

                    td {
                        padding: 5px;
                    }
                </style>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Birth date</th>
                    </tr>
                    @foreach ($customers as $customer)
                    <tr>
                        <td><a href="{{ url('customer')}}/{{ $customer->id}}">{{ $customer->name }}</a></td>
                        <td>{{ $customer->birth_date }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <form method="POST" action="{{url('customers/search/{term}') }}">
                {{ csrf_field() }}
                <input type="text" name="term" placeholder="Search customer">
                <button type="submit">Hae</button>
            </form>
            <br><button type="button" onclick="window.location='{{ url('customers/create') }}'">Add
                user</button><br><br>
        </div>
    </div>
    <div class="item-right">
        <div class="content-item">


            <p>Ensimmäisessä tehtävässä tuli melkein tehtyä tuo 2 tehtävä joten lisäsin vaan tuon haun. Lisäksi
                täytyy hieman miettiä muutamia lisä layoutteja jotta tyylitys olisi helpompaa.</p>
            <p>Alhaalla muutama kuva kun roplasin asiakkaita.</p>
            <div class="center">
                <img src="{{url('images/h6/t12.png')}}" alt="Pic" class="center"><br><br>
            </div>

            <div class="center">
                <img src="{{url('images/h6/t13.png')}}" alt="Pic" class="center"><br><br>
            </div>
            <div class="center">
                <img src="{{url('images/h6/routes.png')}}" alt="Pic" class="center"><br><br>
            </div>
            <div class="center">
                <img src="{{url('images/h6/ctrl.png')}}" alt="Pic" class="center"><br><br>
            </div>




        </div>
    </div>


    @endsection