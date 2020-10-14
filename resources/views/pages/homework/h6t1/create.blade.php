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

    </div>

</div>




@endsection