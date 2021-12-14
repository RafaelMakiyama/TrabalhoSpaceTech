<ul>
    <li><a class="{{Route::is('medicos.index') ? 'active': ''}}" href="{{ route('medicos.index')}}">Médicos</a></li>
    <li><a class="{{Route::is('home') ? 'active': ''}}" href="{{route('home')}}">Doadores</a></li>
    <li><a class="{{Route::is('banco-de-sangue') ? 'active': ''}}" href="{{ route('banco-de-sangue.index')}}">Banco de Sangue</a></li>
    <li><a class="{{Route::is('home') ? 'active': ''}}" href="{{ route('home')}}">Estagiários</a></li>
    <li><a class="{{Route::is('home') ? 'active': ''}}" href="{{ route('home')}}">Doações</a></li>
    <li><a class="{{(Route::is('pacientes.index')||Route::is('pacientes.create')) ? 'active': ''}}" href="{{route('pacientes.index')}}">Pacientes </a></li>
</ul>