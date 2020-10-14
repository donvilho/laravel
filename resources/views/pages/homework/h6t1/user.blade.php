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

                    <h1>User {{ $customer->name }} page</h1>
                    <div class="center">
    
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
                                  <tr>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->birth_date }}</td>
                                  </tr>
                              </table>
                    </div>
                    <button type="button" onclick="window.location='{{ url('customers') }}/{{ $customer->id }}/edit'">Edit</button><br>
                    <br><button type="button" onclick="window.location='{{ url('customers/') }}'">Takaisin</button>
                    
                </div>
            </div>

            <div class="item-right">
                <div class="content-item">
                    <p>Tämä on valitun käyttäjän sivu.</p>
                </div>  
            </div>
        </div>
    </div>

</div>




@endsection