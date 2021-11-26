@extends('layouts.main', ['activePage'=>'news', 'titlePage'=>'Avisos'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Avisos del centro') }}</h4>
                                <p class="card-category">{{ __('Lista de avisos') }}</p>
                            </div>
                            <div class="card-body">
                            @if (session('success'))
                            <div class="alert alert-success" role="success">
                                {{session('success')}}
                            </div>
                            @endif
                                <div class="row">
                                @can('trainner_tcreate') 
                                    <div class="col-md-12 text-right">
                                        <a href="{{ route('news.ncreate') }}" class="btn btn-sm btn-primary">Publicar nuevo aviso</a>
                                    </div>
                                @endcan
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>Ref.</th>
                                            <th>Título</th>
                                            <th>Detalles</th>
                                            <th>Fecha de publicación</th>
                                            @can('trainner_tcreate')
                                            <th class="text-right">Acciones</th>
                                            @endcan
                                        </thead>
                                        <tbody>
                                            @foreach ($news as $aviso)
                                                <tr>
                                                    <td>{{ $aviso->id }}</td>
                                                    <td>{{ $aviso->title}}</td>
                                                    <td>{{ $aviso->text }}</td>
                                                    <td>{{ $aviso->created_at}}</td>
                                                    <td class="td-actions text-right">
                                                        <a href="{{route('news.nshow', $aviso->id)}}" class="btn btn-info"><i class="material-icons">info</i></a>
                                                        @can('trainner_tcreate')
                                                        <a href="{{route('news.nedit', $aviso->id)}}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                        <form action="{{route('news.ndelete', $aviso->id)}}" method="post" style="display:inline-block;" onsubmit="return confirm('¿Deseas eliminar este aviso?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn btn-danger" type="submit" rel="tooltip">
                                                        <i class="material-icons">close</i>
                                                        </button>
                                                        </form>
                                                        @endcan
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                {{ $news->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection