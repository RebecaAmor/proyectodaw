@extends('layouts.main', ['activePage'=>'users', 'titlePage'=>'Nuevo Usuario'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="#" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('Edit Profile') }}</h4>
                            <p class="card-category">{{ __('User information') }}</p>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <label for="name" class="col-sm-2-col-form-label">Nombre completo</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="name" placeholder="..." autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="nif" class="col-sm-2-col-form-label">Nombre completo</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="name" placeholder="..." autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-2-col-form-label">Nombre completo</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="name" placeholder="..." autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="dirección" class="col-sm-2-col-form-label">Nombre completo</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="name" placeholder="..." autofocus>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection