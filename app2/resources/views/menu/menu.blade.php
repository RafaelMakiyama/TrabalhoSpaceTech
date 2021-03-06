<ul>
    <li><a class="{{Route::is('home') ? 'active': ''}}" href="{{route('home')}}">Início</a></li>

    <li><a class="{{(
        Route::is('medicos.index')||
        Route::is('medicos.create')||
        Route::is('medicos.edit')||
        Route::is('medicos.show')
        ) ? 'active': ''}}" href="{{route('medicos.index')}}">Médicos</a></li>

    <li><a class="{{(
        Route::is('doadores.index')||
        Route::is('doadores.create')||
        Route::is('doadores.edit')||
        Route::is('doadores.show')
        ) ? 'active': ''}}" href="{{route('doadores.index')}}">Doadores</a></li>
    
    <li><a class="{{
        Route::is('banco-de-sangue.index') ||
        Route::is('banco-de-sangue.create')||
        Route::is('banco-de-sangue.edit') ||
        Route::is('banco-de-sangue.show') ? 'active': ''}}" href="{{ route('banco-de-sangue.index')}}">Banco de Sangue</a></li>
    
    <li><a class="{{(  Route::is('estagiarios.index')||
        Route::is('estagiarios.create')||
        Route::is('estagiarios.edit')||
        Route::is('estagiarios.show')
        ) ? 'active': ''}}" href="{{route('estagiarios.index')}}">Estagiarios</a></li>
    
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
    <li><a class="{{(
        Route::is('relatorio.index')||
        Route::is('relatorio.administrativo')||
        Route::is('relatorio.doacao')        
        ) ? 'active': ''}}" href="{{route('relatorio.index')}}">Relatórios </a>
    </li>    
</ul>
