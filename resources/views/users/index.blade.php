@extends('layouts.main', ['activePage'=>'users', 'titlePage'=>'Socios abonados'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Socios') }}</h4>
                                <p class="card-category">{{ __('Lista de socios abonados') }}</p>
                            </div>
                            <div class="card-body">
                            @if (session('success'))
                            <div class="alert alert-success" role="success">
                                {{session('success')}}
                            </div>
                            @endif
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary">Agregar socio</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>ID</th>
                                            <th>NIF</th>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Fecha de alta</th>
                                            <th>Roles</th>
                                            <th class="text-right">Acciones</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $user->id}}</td>
                                                    <td>{{ $user->nif}}</td>
                                                    <td>{{ $user->name}}</td>
                                                    <td>{{ $user->email}}</td>
                                                    <td>{{ $user->created_at}}</td>
                                                    <td>
                                                        @forelse ($user->roles as $role)
                                                            <span class="badge badge-info">{{ $role->name }}</span>
                                                        @empty
                                                            <span class="badge badge-danger">No roles</span>
                                                        @endforelse
                                                    </td>
                                                    <td class="td-actions text-right">
                                                        <a href="{{route('users.show', $user->id)}}" class="btn btn-info"><i class="material-icons">info</i></a>
                                                        <a href="{{route('users.edit', $user->id)}}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                        <form action="{{route('users.delete', $user->id)}}" method="post" style="display:inline-block;" onsubmit="return confirm('Se van a eliminar todos los datos del usuario de forma definitiva')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn btn-danger" type="submit" rel="tooltip">
                                                        <i class="material-icons">close</i>
                                                        </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection