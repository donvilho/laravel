@extends('layouts.app')

@section('content')

<div class="content-grid">

    <div class="left">
        <div class="content-item">
            @include('include.homework')
        </div>
    </div>

    <div class="right">

        @yield('content-right')

    </div>
</div>



@endsection