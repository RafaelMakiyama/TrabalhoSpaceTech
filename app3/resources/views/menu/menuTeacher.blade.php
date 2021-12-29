
<ul>
    @auth
        <li><a class="{{Route::is('home') ? 'active': ''}}" href="{{route('home')}}">Início</a></li>
        <li><a class="{{(
            Route::is('listar.aulas')||
            Route::is('criar.aula')
            ) ? 'active': ''}}" href="{{route('listar.aulas')}}">Visualizar aulas ministradas</a></li>

        <li style="float: right">
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button type="submit" class="btn btn-danger">Sair</button>
            </form>
        </li>
    @else
        <li>
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Entrar</a>
        </li>
    @endauth
</ul>