<ul>
    @auth
        <li><a class="{{(  Route::is('aulas.index')
            ) ? 'active': ''}}" href="{{route('cursos-estudante')}}">Visualizar curso</a></li>
        <li> 
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