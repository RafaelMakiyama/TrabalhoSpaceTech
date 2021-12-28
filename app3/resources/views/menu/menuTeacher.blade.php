
<ul>
    @auth
        <li><a class="{{Route::is('home') ? 'active': ''}}" href="{{route('home')}}">Início</a></li>
        <li><a class="{{(
            Route::is('professor.index')
            ) ? 'active': ''}}" href="{{route('professor.index')}}">Visualizar aulas ministradas</a></li>

        <li><a class="{{(
            Route::is('alunos.index')||
            Route::is('alunos.create')||
            Route::is('alunos.edit')||
            Route::is('alunos.show')
            ) ? 'active': ''}}" href="{{route('alunos.index')}}">Visualizar cursos ministrados</a></li>

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