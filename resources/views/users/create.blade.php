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
                                <label for="details" class="col-sm-2 col-form-label">Lesiones físicas</label>
                                <div class="col-sm-7">
                                    <label><input type="radio" id="yes" name="info" value="yes"> Sí </label>
                                    <br>
                                    <label><input type="radio" id="no" name="info" value="no"> No </label>
                                    <!-- <textarea class="form-control" name="details" placeholder="Lesiones, problemas físicos..."></textarea> -->
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
