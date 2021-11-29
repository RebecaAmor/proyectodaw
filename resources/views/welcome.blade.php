@extends('layouts.main', ['class' => 'off-canvas-sidebar', 'activePage' => '', 'title' => __('Gymtastic')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-md-9 ml-auto mr-auto mb-3 text-center">
      <h3>{{ __('¡GYMTASTIC, más que un gimnasio!') }} </h3>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-primary text-center">
            <!-- <div class="social-line">
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="#" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-google-plus"></i>
              </a>
            </div> -->
            <h5>Acepta el desafío de ponerte en forma</h5>
          </div>
          <div class="card-body">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6 text-center">
                            <p><strong>¡Escoge tu próxima clase o<br /> comienza tu nueva aventura ahora!</strong></p>
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