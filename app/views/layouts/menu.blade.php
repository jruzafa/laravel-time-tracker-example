<ul class="nav">
    @if (Auth::user())
        <li>{{ HTML::linkRoute('dashboard','Dashboard') }}</li>
        <li>{{ HTML::linkRoute('time_entries','Time Entries') }}</li>
        <li>{{ HTML::linkRoute('projects','Projects') }}</li>
        <li>{{ HTML::link('logout', 'Logout') }}</li>
    @else
        <li>{{ HTML::linkRoute('login','Login') }}</li>
    @endif
</ul>

