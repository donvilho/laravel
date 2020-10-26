@extends('layouts.homework')
@section('content-right')


<div class="item-grid">

  <div class="item-left">

    <div class="content-item">

      <h1>Edit Customer</h1>

      <div>
        <form method="POST" action="{{ url('/') }}/customers/{{ $customer->id}}">

          {{ method_field('PATCH') }}
          {{ csrf_field() }}

          <div>
            <input type="text" name="name" value="{{ $customer->name }}">
          </div>

          <div>
            <input type="text" name="birth_date" value={{$customer->birth_date}}>
          </div>

          <div>
            <br><button type="submit">Update</button>
          </div>

        </form>

        <form method="POST" action="{{ url('/') }}/customers/{{ $customer->id}}">

          @method('DELETE')
          @csrf

          <div>
            <button type="submit">Delete</button>
          </div>

        </form>
        <br><button type="button" onclick="window.location='{{ url('customers/') }}'">Takaisin</button>
      </div>
    </div>
  </div>

  <div class="item-right">

    <div class="content-item">
      <p>Tässä voit muokata käyttäjän tietoja.</p>
    </div>

  </div>

</div>




@endsection