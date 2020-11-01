@extends('layouts.app-studentronic')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Opiskelijat kurssilla</div>


<div class="panel-body">

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nimi</th>
      <th scope="col">Kurssi</th>
      <th scope="col">ECTS-pisteet</th>
   
    </tr>
  </thead>
  <tbody>


@foreach ($users as $user)

    <tr class="bg-success">
      <th scope="row">{{ $user->id }}</th> 
    <td><a href="{{ url('studentcredits') }}?id={{ $user->id }}">{{ $user->Sukunimi }} {{ $user->Etunimi }}</a></td>
    <td>{{ $user->Kurssi }}</td>  
    <td>{{ $user->credits }}</td>
      <td>
      <!-- Tämä foreach on täällä vain esimerkin vuoksi, jotta
           nähdään pivotin sisältö. vaihda if(0) -> if(1) 
           nähdäksesi tämän sisällön-->
      @if(0)
        @foreach ($user->pivot as $key => $value)
            {{ $key }}   : {{ $value }}
        @endforeach
      @endif
      </td>
    </tr>

@endforeach

  </tbody>
</table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection