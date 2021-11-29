@extends('layouts.main', ['activePage'=>'news', 'titlePage'=>'Aviso del centro'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{ __('Aviso') }}</h4>
                        <p class="card-category">{{$news->title}}</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card card-user">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <strong>Fecha y hora de publicación:</strong> {{$news->created_at}}</strong>
                                        </p>
                                        <div class="card-text">
                                        <strong>{{$news->text}}</strong>
                                        </div>
                                    </div>
                                    <div class="card-footer ml-auto mr-auto">
                                        <div class="button-container">
                                            <a href="{{route('news.nindex', $news->id)}}" class="btn btn-sm btn-primary">Volver</a>
                                        </div>
                                    </div>
                                    @can('trainner_tedit')
                                    <div class="card-footer ml-auto mr-auto">
                                        <div class="button-container">
                                            <a href="{{route('news.nedit', $news->id)}}" class="btn btn-sm btn-primary">Editar</a>
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
</div>
@endsection