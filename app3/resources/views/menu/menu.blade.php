

    @auth

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