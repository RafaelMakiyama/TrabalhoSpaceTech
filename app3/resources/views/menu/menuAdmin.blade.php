<ul>
    @auth
        <li><a class="{{Route::is('home') ? 'active': ''}}" href="{{route('home')}}">Início</a></li>
        <li><a class="{{(
            Route::is('professor.index')||
            Route::is('professor.create')||
            Route::is('professor.edit')||
            Route::is('professor.show')
            ) ? 'active': ''}}" href="{{route('professor.index')}}">Professores</a></li>

        <li><a class="{{(
            Route::is('alunos.index')||
            Route::is('alunos.create')||
            Route::is('alunos.edit')||
            Route::is('alunos.show')
            ) ? 'active': ''}}" href="{{route('alunos.index')}}">Alunos</a></li>

        <li><a class="{{
            Route::is('cursos.index') ||
            Route::is('cursos.create')||
            Route::is('cursos.edit') ||
            Route::is('cursos.show') ? 'active': ''}}" href="{{ route('cursos.index')}}">Cursos</a></li>

        <li><a class="{{(  Route::is('planos-financeiro.index')||
            Route::is('planos-financeiro.create')||
            Route::is('planos-financeiro.edit')||
            Route::is('planos-financeiro.show')
            ) ? 'active': ''}}" href="{{route('planos-financeiro.index')}}">Planos Financeiro</a></li>

        <li><a class="{{(  Route::is('aulas.index')||
            Route::is('aulas.create')||
            Route::is('aulas.edit')||
            Route::is('aulas.show')
            ) ? 'active': ''}}" href="{{route('aulas.index')}}">Aulas</a></li>
        <li> 
        <li style="float: right">
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button type="submit" class="btn btn-danger" style="padding: 13px;">Sair</button>
            </form>
        </li>
        <li style="float: right">
            <a href="#">Olá {{Auth::user()->name}}</a>
        </li>
    @else
        <li>
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Entrar</a>
        </li>
    @endauth
</ul>