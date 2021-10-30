

@canany(['edit_alumnos','delete_alumnos','view_alumnos','create_alumnos'])
<li class="{{ Request::is('alumnos*') ? 'active' : '' }}">
    <a href="{{ route('alumnos.index') }}"><i class="fa fa-graduation-cap"></i><span>Alumnos</span></a>
</li>
@endcan


@canany(['edit_profesor','delete_profesor','view_profesor','create_profesor'])
<li class="{{ Request::is('profesor*') ? 'active' : '' }}">
    <a href="{{ route('profesor.index') }}"><i class="fa fa-product-hunt"></i><span>profesor</span></a>
</li>
@endcan


@canany(['edit_nota','delete_nota','view_nota','create_nota'])
<li class="{{ Request::is('nota*') ? 'active' : '' }}">
    <a href="{{ route('nota.index') }}"><i class="fa fa-address-book"></i><span>Notas</span></a>
</li>
@endcan


@canany(['edit_cursos','delete_cursos','view_cursos','create_cursos'])
<li class="{{ Request::is('cursos*') ? 'active' : '' }}">
    <a href="{{ route('cursos.index') }}"><i class="fa fa-book"></i><span>Cursos</span></a>
</li>
@endcan


@canany(['edit_roles','delete_roles','view_roles','create_roles'])
<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>
@endcan
@canany(['edit_users','delete_users','view_users','create_users'])
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-user"></i><span>Users</span></a>
</li>
@endcan