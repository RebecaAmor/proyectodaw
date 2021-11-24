@extends('layouts.main', ['activePage'=>'create', 'titlePage'=>'Modificar Datos'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('users.update', $user->id) }}" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('Usuario ') }} {{$user->name}}</h4>
                            <p class="card-category">{{ __('Editar información de socio') }}</p>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Nombre completo</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="name" value="{{$user->name}}" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="nif" class="col-sm-2 col-form-label">NIF</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="nif" value="{{$user->nif}}">
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-2 col-form-label">Correo electrónico</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" name="email" value="{{$user->email}}">
                                </div>
                            </div>
                            <div class="row">
                                <label for="bday" class="col-sm-2 col-form-label">Fecha de nacimiento</label>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" name="bday" value="{{$user->bday}}">
                                </div>
                            </div>
                            <div class="row">
                                <label for="details" class="col-sm-2 col-form-label">Lesiones físicas</label>
                                <div class="col-sm-7">
                                    <label><input type="radio" id="yes" name="info" value="yes"> Sí </label>
                                    <br>
                                    <label><input type="radio" id="no" name="info" value="no"> No </label>
                                    <!-- <textarea class="form-control" name="details" placeholder="Lesiones, problemas físicos..."></textarea> -->
                                </div>
                            </div>
                            <div class="row">
                                <label for="password" class="col-sm-2 col-form-label">Nueva contraseña</label>
                                <div class="col-sm-7">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>
                            @can('user_create')
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Roles</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="profile">
                                                <table class="table">
                                                    <tbody>
                                                        @foreach ($roles as $id => $role)
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="roles[]"
                                                                            value="{{ $id }}" {{ $user->roles->contains($id) ? 'checked' : ''}}>
                                                                        <span class="form-check-sign">
                                                                            <span class="check" value=""></span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                {{ $role }}
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endcan
                        </div>
                        <!-- Footer -->
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection