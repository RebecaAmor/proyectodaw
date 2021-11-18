@extends('layouts.main', ['activePage'=>'create', 'titlePage'=>'Modificar Datos'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('admin.tupdate', $trainner->id) }}" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('Entrenador') }} {{$trainner->tname}}</h4>
                            <p class="card-category">{{ __('Editar datos de monitor') }}</p>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <label for="tname" class="col-sm-2 col-form-label">Nombre completo</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="tname" value="{{$trainner->tname}}" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="tnif" class="col-sm-2 col-form-label">NIF</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="tnif" value="{{$trainner->tnif}}">
                                </div>
                            </div>
                            <div class="row">
                                <label for="tmail" class="col-sm-2 col-form-label">Correo electrónico</label>
                                <div class="col-sm-7">
                                    <input type="tmail" class="form-control" name="tmail" value="{{$trainner->tmail}}">
                                </div>
                            </div>
                            <div class="row">
                                <label for="tbday" class="col-sm-2 col-form-label">Fecha de nacimiento</label>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" name="tbday" value="{{$trainner->tbday}}">
                                </div>
                            </div>
                            <div class="row">
                                <label for="sport" class="col-sm-2 col-form-label">Disciplina</label>
                                <div class="col-sm-7">
                                <select name="sport" id="sport">
                                    <option value="Natación">Natación</option>
                                    <option value="Zumba">Zumba</option>
                                    <option value="Fitness">Fitness</option>
                                    <option value="Artes marciales">Artes marciales</option>
                                    <option value="Yoga/pilates">Yoga/pilates</option>
                                    <option value="Spinning">Spinning</option>
                                    <option value="Aerobic">Aerobic</option>
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
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection