<ul>
    <li><a class="{{(
        Route::is('medicos.index')||
        Route::is('medicos.create')||
        Route::is('medicos.edit')||
        Route::is('medicos.show')
        ) ? 'active': ''}}" href="{{route('medicos.index')}}">Médicos</a></li>
    <li><a class="{{Route::is('home') ? 'active': ''}}" href="{{route('home')}}">Doadores</a></li>
    <li><a class="{{Route::is('banco-de-sangue') ? 'active': ''}}" href="{{ route('banco-de-sangue.index')}}">Banco de Sangue</a></li>
    <li><a class="{{Route::is('home') ? 'active': ''}}" href="{{ route('home')}}">Estagiários</a></li>
    <li><a class="{{(  Route::is('doacoes.index')||
        Route::is('doacoes.create')||
        Route::is('doacoes.edit')||
        Route::is('doacoes.show')
        ) ? 'active': ''}}" href="{{route('doacoes.index')}}">Doações</a></li>
    <li><a class="{{(
        Route::is('pacientes.index')||
        Route::is('pacientes.create')||
        Route::is('pacientes.edit')||
        Route::is('pacientes.show')
        ) ? 'active': ''}}" href="{{route('pacientes.index')}}">Pacientes </a>
    </li>
</ul>
