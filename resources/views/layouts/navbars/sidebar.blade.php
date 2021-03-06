<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('img/sidebar-1.jpg') }}">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="http://127.0.0.1:8000/home" class="simple-text logo-normal">
      {{ __('Gymtastic') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      @can('user_create')
      <li class="nav-item{{ $activePage == 'create' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('users.create') }}">
          <i class="material-icons">person_add_alt_1</i>
            <p>{{ __('Crear socio') }}</p>
        </a>
      </li>
      @endcan
      @can('user_index')
      <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
        <a class="nav-link" href="http://127.0.0.1:8000/users">
          <i class="material-icons">people</i>
            <p>{{ __('Socios registrados') }}</p>
        </a>
      </li>
      @endcan
      @can('user_show')
      <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('users.show',auth()->user()->id)}}">
          <i class="material-icons">account_circle</i>
            <p>{{ __('Mis datos') }}</p>
        </a>
      </li>
      @endcan
      @can('trainner_tcreate')
      <li class="nav-item{{ $activePage == 'tcreate' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('admin.tcreate') }}">
          <i class="material-icons">person_add_alt</i>
            <p>{{ __('Agregar entrenador') }}</p>
        </a>
      </li>
      @endcan
      @can('trainner_tindex')
      <li class="nav-item{{ $activePage == 'trainners' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('admin.tindex') }}">
          <i class="material-icons">people_outline</i>
            <p>{{ __('Entrenadores disponibles') }}</p>
        </a>
      </li>
      @endcan
      @can('event_create')
      <li class="nav-item{{ $activePage == 'evento' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('evento.form') }}">
          <i class="material-icons">edit_calendar</i>
            <p>{{ __('Agregar actividad') }}</p>
        </a>
      </li>
      @endcan
      @can('event_index')
      <li class="nav-item{{ $activePage == 'calendario' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('evento.index') }}">
          <i class="material-icons">date_range</i>
            <p>{{ __('Calendario de actividades') }}</p>
        </a>
      </li>
      @endcan
      <li class="nav-item{{ $activePage == 'news' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('news.nindex') }}">
          <i class="material-icons">text_snippet</i>
            <p>{{ __('Avisos del centro') }}</p>
        </a>
      </li>
      @can('permission_index')
      <li class="nav-item{{ $activePage == 'permissions' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('permissions.index') }}">
          <i class="material-icons">lock</i>
            <p>{{ __('Permisos') }}</p>
        </a>
      </li>
      @endcan
      @can('role_index')
      <li class="nav-item{{ $activePage == 'roles' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('roles.index') }}">
          <i class="material-icons">admin_panel_settings</i>
            <p>{{ __('Roles') }}</p>
        </a>
      </li>
      @endcan
      <!-- <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('img/laravel.svg') }}"></i>
          <p>{{ __('Susprinci??n') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <i class="material-icons">bookmark</i>
                <span class="sidebar-normal">{{ __('Sesiones individuales') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="#">
              <i class="material-icons">bookmarks</i>
                <span class="sidebar-normal"> {{ __('Bonos') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Clases disponibles') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('evento.index') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Lista de clases y horarios') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Mi panel') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">event</i>
          <p>{{ __('Mis reservas') }}</p>
        </a>
      </li> -->
      <li class="nav-item active-pro{{ $activePage == 'susbscription' ? ' active' : '' }}">
        <a class="nav-link text-white bg-danger" href="{{ route('subs.index') }}">
          <i class="material-icons text-white">unarchive</i>
          <p>{{ __('Ver Tarifas') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
