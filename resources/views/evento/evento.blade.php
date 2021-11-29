@extends('layouts.main', ['activePage'=>'calendario', 'titlePage'=>'Información de actividad'])
@section('content')
<html>
  <body>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Actividad') }}</h4>
                <p class="card-category">Detalles de la clase</p>
              </div>
              <div class="container">
                <div class="col-md-9">
                  <div class="fomr-group">
                  <br>
                  <h5>Actividad</h5>
                    {{ $event->titulo }}
                  </div>
                  <br>
                  <div class="fomr-group">
                    <h5>Descripción</h5>
                      {{ $event->descripcion }}
                  </div>
                  <br>
                  <div class="fomr-group">
                    <h5>Fecha</h5>
                      {{ $event->fecha }}
                  </div>
                  <br>
                  <div class="fomr-group">
                    <h5>Hora</h5>
                      {{ $event->hora }} horas
                  </div>
                  <br>
                  <a class="btn btn-info" href="{{ route('evento.index') }}">Volver</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>       
  </body>
</html>
@endsection