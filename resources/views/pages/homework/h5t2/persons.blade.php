@if (count($persons))
<h3>Hurja sakki:</h3>
<ul>
    @foreach ($persons as $person)
        <li>{{ $person }}</li>
    @endforeach
</ul>
@endif