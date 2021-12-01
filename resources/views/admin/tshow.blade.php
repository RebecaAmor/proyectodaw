@extends('layouts.main', ['activePage'=>'trainners', 'titlePage'=>'Datos del entrenador'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{ __('Entrenador') }}</h4>
                        <p class="card-category">Datos del monitor {{$trainner->tname}}</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="author">
                                        <h5 class="title mt-3">{{$trainner->tname}}</h5>
                                        @can('trainner_tedit')
                                        <strong><p>DNI:</strong> {{$trainner->tnif}}</p>
                                        <strong><p>Email:</strong> {{$trainner->tmail}}</p>
                                        <strong><p>Fecha de nacimiento:</strong> {{$trainner->tbday}}</p>
                                        @endcan
                                        <strong><p>Especialidad:</strong> {{$trainner->sport}}</p>
                                        <strong><p>CV:</strong> {{$trainner->cv}}</p>
                                    </div>
                                </div>
                                @can('trainner_tedit')
                                <div class="card-footer ml-auto mr-auto">
                                    <div class="button-container">
                                        <a href="{{route('admin.tedit', $trainner->id)}}" class="btn btn-sm btn-primary">Modificar</a>
                                    </div>
                                </div>
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection