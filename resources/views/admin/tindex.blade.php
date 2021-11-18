@extends('layouts.main', ['activePage'=>'trainners', 'titlePage'=>'Entrenadores'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Entrenadores') }}</h4>
                                <p class="card-category">{{ __('Lista de entrenadores') }}</p>
                            </div>
                            <div class="card-body">
                            @if (session('success'))
                            <div class="alert alert-success" role="success">
                                {{session('success')}}
                            </div>
                            @endif
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <a href="{{ route('admin.tcreate') }}" class="btn btn-sm btn-primary">Agregar entrenador</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>NIF</th>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th class="text-right">Acciones</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($trainners as $trainner)
                                                <tr>
                                                    <!-- <td>{{ $trainner->id}}</td> -->
                                                    <td>{{ $trainner->tnif }}</td>
                                                    <td>{{ $trainner->tname }}</td>
                                                    <td>{{ $trainner->tmail }}</td>
                                                    <!-- <td>{{ $trainner->created_at}}</td> -->
                                                    <td class="td-actions text-right">
                                                        <a href="{{route('admin.tshow', $trainner->id)}}" class="btn btn-info"><i class="material-icons">info</i></a>
                                                        <a href="{{route('admin.tedit', $trainner->id)}}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                        <form action="{{route('admin.tdelete', $trainner->id)}}" method="post" style="display:inline-block;" onsubmit="return confirm('Se van a eliminar todos los datos del monitor de forma definitiva')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn btn-danger" type="submit" rel="tooltip">
                                                        <i class="material-icons">close</i>
                                                        </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                {{ $trainners->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection