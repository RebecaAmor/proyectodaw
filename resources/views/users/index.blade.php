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
                                                    <td class="td-actions text-right">
                                                        <button class="btn btn btn-info" type="button">
                                                        <i class="material-icons">person</i>
                                                        </button>
                                                        <button class="btn btn btn-info" type="button">
                                                        <i class="material-icons">person</i>
                                                        </button>
                                                        <button class="btn btn btn-info" type="button">
                                                        <i class="material-icons">person</i>
                                                        </button>
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