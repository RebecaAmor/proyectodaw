@extends('layouts.main', ['activePage'=>'news', 'titlePage'=>'Aviso del centro'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{ __('Aviso') }}</h4>
                        <p class="card-category">{{$news->title}}</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card card-user">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <div class="author">
                                                <h5 class="title mt-3">{{$news->title}}</h5>
                                                <p class="description">
                                                    Fecha de publicación: {{$news->created_at}}
                                                </p>
                                                <p class="description">
                                                    Referencia: {{$news->id}}
                                                </p>
                                            </div>
                                        </p>
                                        <div class="card-description">
                                            {{$news->text}}
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