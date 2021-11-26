@extends('layouts.main', ['activePage'=>'news', 'titlePage'=>'Centro de avisos'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('news.publish') }}" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('Nuevo aviso') }}</h4>
                            <p class="card-category">{{ __('Publicar nuevo asiso') }}</p>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <label for="title" class="col-sm-2 col-form-label">Título</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="tname" placeholder="Nombre del socio..." autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="nif" class="col-sm-2 col-form-label">NIF</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="tnif" placeholder="Número de DNI...">
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-2 col-form-label">Correo electrónico</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" name="tmail" placeholder="email@email.com...">
                                </div>
                            </div>
                            <div class="row">
                                <label for="bday" class="col-sm-2 col-form-label">Fecha de nacimiento</label>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" name="tbday" placeholder="DD/MM/AAAA">
                                </div>
                            </div>
                            <div class="row">
                                <label for="details" class="col-sm-2 col-form-label">CV</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="cv">
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