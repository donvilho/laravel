<ul>
    <li><a class="@if(Request::is('/')) active @endif" href="{{ url('/') }}">Home</a></li>
    <li><a class="@if(Request::is('assignments*')) active @endif" href="{{ url('/assignments') }}">Tehtävät</a></li>
</ul>

