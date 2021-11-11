@extends('layouts.main', ['activePage'=>'users', 'titlePage'=>'Información de socio'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{ __('Socio') }}</h4>
                        <p class="card-category">Datos del usuario {{$user->name}}</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card card-user">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <div class="author">
                                                <h5 class="title mt-3">{{$user->name}}</h5>
                                                <p class="description">
                                                    {{$user->nif}}<br>
                                                    {{$user->email}}<br>
                                                    {{$user->bday}}<br>
                                                    {{$user->created_at}}<br>
                                                </p>
                                            </div>
                                        </p>
                                        <div class="card-description">
                                            {{$user->info}}
                                        </div>
                                    </div>
                                    <div class="card-footer ml-auto mr-auto">
                                        <div class="button-container">
                                            <button class="btn btn-sm btn-primary">Editar</button>
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