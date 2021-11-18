@extends('layouts.main', ['activePage'=>'trainners', 'titlePage'=>'Datos del entrenador'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{ __('Entrenador') }}</h4>
                        <p class="card-category">Datos del monitor {{$trainner->tname}}</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card card-user">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <div class="author">
                                                <h5 class="title mt-3">{{$trainner->tname}}</h5>
                                                <p class="description">
                                                    {{$trainner->tnif}}<br>
                                                    {{$trainner->tmail}}<br>
                                                    {{$trainner->tbday}}<br>
                                                    {{$trainner->sport}}<br>
                                                </p>
                                            </div>
                                        </p>
                                        <div class="card-description">
                                            {{$trainner->cv}}
                                        </div>
                                    </div>
                                    <div class="card-footer ml-auto mr-auto">
                                        <div class="button-container">
                                            <a href="{{route('admin.tedit', $trainner->id)}}" class="btn btn-sm btn-primary">Modificar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection