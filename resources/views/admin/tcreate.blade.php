@extends('layouts.main', ['activePage'=>'tcreate', 'titlePage'=>'Nuevo entrenador'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('admin.tstore') }}" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('Registro de entrenador') }}</h4>
                            <p class="card-category">{{ __('Datos del nuevo monitor') }}</p>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <label for="tname" class="col-sm-2 col-form-label">Nombre completo</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="tname" placeholder="Nombre del monitor..." autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="tnif" class="col-sm-2 col-form-label">NIF</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="tnif" placeholder="Número de DNI...">
                                </div>
                            </div>
                            <div class="row">
                                <label for="tmail" class="col-sm-2 col-form-label">Correo electrónico</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" name="tmail" placeholder="email@email.com...">
                                </div>
                            </div>
                            <div class="row">
                                <label for="tbday" class="col-sm-2 col-form-label">Fecha de nacimiento</label>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" name="tbday" placeholder="DD/MM/AAAA">
                                </div>
                            </div>
                            <div class="row">
                                <label for="sport" class="col-sm-2 col-form-label">Disciplina</label>
                                <div class="col-sm-7">
                                <select name="sport" id="sport">
                                    <option value="natación">Natación</option>
                                    <option value="zumba">Zumba</option>
                                    <option value="fitness">Fitness</option>
                                    <option value="artmarciales">Artes marciales</option>
                                    <option value="yoga">Yoga/pilates</option>
                                    <option value="spinning">Spinning</option>
                                    <option value="aerobic">Aerobic</option>
                                </select>
                                </div>
                            </div>
                            <div class="row">
                                <label for="cv" class="col-sm-2 col-form-label">CV</label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" name="cv"></textarea>
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