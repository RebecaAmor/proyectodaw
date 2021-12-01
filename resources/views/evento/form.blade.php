@extends('layouts.main', ['activePage'=>'evento', 'titlePage'=>'Registro de actividades'])
@section('content')
<html>
  <head>
    <title></title>
    <meta content="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">{{ __('Agregar actividad ') }}</h4>
              <p class="card-category">{{ __('Registrar una nueva actividad en el calendario') }}</p>
            </div>
            <div class="card-body ">
              @if (count($errors) > 0)
                <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
              @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>{{ $message }}</strong>
              </div>
              @endif
              <div class="col-md-6">
                <form action="{{ route('evento.create') }}" method="POST">
                  @csrf
                  <div class="fomr-group">
                    <label>Nombre de la clase</label>
                    <input type="text" class="form-control" name="titulo">
                  </div>
                  <div class="fomr-group">
                    <label>Descripción</label>
                    <input type="text" class="form-control" name="descripcion">
                  </div>
                  <div class="fomr-group">
                    <label>Fecha</label>
                    <input type="date" class="form-control" name="fecha">
                  </div>
                  <div class="fomr-group">
                    <label>Hora</label>
                    <input type="time" class="form-control" name="hora">
                  </div>
                  <div class="fomr-group">
                    <label>Lugar</label>
                    <input type="text" class="form-control" name="sala">
                  </div>
                  <br>
                  <input type="submit" class="btn btn-info" value="Guardar">
                  <a class="btn btn-default"  href="{{ route('evento.index') }}">Cancelar</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
<footer class="page-footer font-small blue pt-4">

</footer>
<!-- Footer -->

  </body>
</html>
@endsection