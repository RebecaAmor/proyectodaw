@extends('layouts.main', ['activePage'=>'', 'titlePage'=>'CONTACTO'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('users.contactform') }}" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('Contacta con tu centro') }}</h4>
                            <p class="card-category">{{ __('Por favor, cubre el siguiente formulario para contactar con nosotros') }}</p>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="name" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-2 col-form-label">Correo electrónico</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="row">
                                <label for="subject" class="col-sm-2 col-form-label">Asunto</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="subject" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="message" class="col-sm-2 col-form-label">Mensaje</label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" name="message"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- Footer -->
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                        <div class="col-sm-7">
                            <h4>Visítanos</h4>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11601.633938305822!2d-8.4160182!3d43.3684822!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xca28d7642e8b8ca!2sPistas%20Polideportivas%20de%20la%20Ciudad%20Deportiva%20de%20Riazor!5e0!3m2!1ses!2ses!4v1638192800209!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe><br />
                            <br />
                            <h4>O llámanos al teléfono 881 90 60 30</h4>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection