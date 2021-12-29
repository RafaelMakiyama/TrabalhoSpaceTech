<ul>
    @auth
        <li><a class="{{(  Route::is('aulas.index')
            ) ? 'active': ''}}" href="{{route('cursos-estudante')}}">Visualizar curso</a></li>
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