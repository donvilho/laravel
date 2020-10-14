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
                    <h1>Users</h1>
                        <div class="center ">                          
                            <style scoped>
                                table {border-collapse:collapse;  background-color:white;}
                                table, td, th, tr{border:1px solid black;}
                                td{padding: 5px;}
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

                            
                            <form method="POST" action="{{url('customers/search/{term}') }}">
                                {{ csrf_field() }}
                                <input type="text" name="term" placeholder="Search customer">
                                <button type="submit">Hae</button>
                            </form>


                        </div>
                        <button type="button" onclick="window.location='{{ url('customers/create') }}'">Add user</button>
                        <button type="button" onclick="window.location='{{ url('customers/') }}'">List all</button> 
                </div>
            </div>
            <div class="item-right">
                <div class="content-item">
                    <div>
                        <p>Tässä on listattu kaikki käyttäjät joita tietokannassa on.</p>
                        <img src="{{url('images/h6/t12.png')}}" alt="Pic" class="center"><br><br>
                        <img src="{{url('images/h6/t13.png')}}" alt="Pic" class="center"><br><br>
                    </div>
                   
                </div>
            </div>
        </div>      
    </div>
</div>




@endsection