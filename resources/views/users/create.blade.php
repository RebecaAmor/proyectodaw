@extends('layouts.main', ['activePage'=>'create', 'titlePage'=>'Nuevo Usuario'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('users.store') }}" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('Alta de socio') }}</h4>
                            <p class="card-category">{{ __('Datos del nuevo usuario') }}</p>
                        </div>
                        <div class="card-body ">
                            <!-- @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif -->
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Nombre completo</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="name" placeholder="Nombre del socio..." value="{{ old('name') }}" autofocus>
                                    @if($errors->has('name'))
                                        <span class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="nif" class="col-sm-2 col-form-label">NIF</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="nif" placeholder="Número de DNI..." value="{{ old('nif') }}">
                                    @if($errors->has('nif'))
                                        <span class="error text-danger" for="input-nif">{{ $errors->first('nif') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-2 col-form-label">Correo electrónico</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" name="email" placeholder="email@email.com..." value="{{ old('email') }}">
                                    @if($errors->has('email'))
                                        <span class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="bday" class="col-sm-2 col-form-label">Fecha de nacimiento</label>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" name="bday" placeholder="DD/MM/AAAA" value="{{ old('bday') }}">
                                    @if($errors->has('bday'))
                                        <span class="error text-danger" for="input-bday">{{ $errors->first('bday') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                                <div class="col-sm-7">
                                    <input type="password" class="form-control" name="password">
                                    @if($errors->has('password'))
                                        <span class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="roles" class="col-sm-2 col-form-label">Roles</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <div class="tab-content">
                                            <div class="tab-pane active">
                                                <table class="table">
                                                    <tbody>
                                                        @foreach ($roles as $id => $role)
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input" type="checkbox" name="roles[]" value="{{ $id }}">
                                                                            <span class="form-check-sign">
                                                                                <span class="check"></span>
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
                        </div>
                        <!-- Footer -->
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection