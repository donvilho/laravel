@extends('layouts.homework')
@section('content-right')

<div class="item-grid">

    <div class="item-left">

        <div class="content-item">

            <div>
                <h1>Add Customer</h1>

                <form method="POST" action="../customers">

                    {{ csrf_field() }}

                    <div>
                        <input type="text" name="name" placeholder="Customer Name">
                    </div>

                    <div>
                        <input type="text" name="birth_date" value="1999-09-09">
                    </div>

                    <div>
                        <br><button type="submit">Save</button>
                    </div>

                </form>
                <br><button type="button" onclick="window.location='{{ url('customers/') }}'">Takaisin</button>

            </div>


        </div>

    </div>

    <div class="item-right">
        <div class="content-item">
            <p>Tässä voit lisätä käyttäjän tietokantaan</p>
        </div>
    </div>

</div>
@endsection