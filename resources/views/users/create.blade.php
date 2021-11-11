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
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Nombre completo</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="name" placeholder="Nombre del socio..." autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="nif" class="col-sm-2 col-form-label">NIF</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="nif" placeholder="Número de DNI...">
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-2 col-form-label">Correo electrónico</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" name="email" placeholder="email@email.com...">
                                </div>
                            </div>
                            <div class="row">
                                <label for="bday" class="col-sm-2 col-form-label">Fecha de nacimiento</label>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" name="bday" placeholder="DD/MM/AAAA">
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