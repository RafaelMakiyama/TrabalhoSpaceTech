

    @auth

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
    <ul>
        <li>
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Entrar</a>
        </li>
    </ul>
    @endauth


@role('admin')
    @include('menu.menuAdmin')
@endrole

@role('student')
    @include('menu.menuStudent')
@endrole

@role('teacher')
    @include('menu.menuTeacher')
@endrole