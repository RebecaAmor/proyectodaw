@extends('layouts.main', ['activePage'=>'news', 'titlePage'=>'Aviso del centro'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('news.nupdate', $news->id) }}" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('Aviso') }} #{{$news->id}}</h4>
                            <p class="card-category">{{ __('Modificar aviso') }}</p>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <label for="title" class="col-sm-2 col-form-label">Título</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="tname" value="{{$news->title}}" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="ntext" class="col-sm-2 col-form-label">Descripción</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="ntext" value="{{$news->text}}">
                                </div>
                            </div>
                        </div>
                        <!-- Footer -->
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">Modificar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection