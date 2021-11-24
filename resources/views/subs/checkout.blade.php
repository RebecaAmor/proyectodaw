@extends('layouts.main', ['activePage'=>'subscription', 'titlePage'=>'Pedido'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Tu pedido') }}</h4>
                                <p class="card-category">{{ __('Suscripción añadida al pedido') }}</p>
                            </div>
                            <div class="card-body">
                            @if (session('success'))
                            <div class="alert alert-success" role="success">
                                {{session('success')}}
                            </div>
                            @endif
                            <!-- Contenedor principal -->
                                <div class="container">
                                    <div class="row">
                                        @if (count(Cart::getContent()))
                                        <table class="table">
                                            <thead>
                                                <th>Tipo de suscripción</th>
                                                <th>Precio</th>
                                            </thead>
                                            <tbody>
                                            @foreach (Cart::getContent() as $subscription)
                                                <tr>
                                                    <td>{{$subscription->name}}</td>
                                                    <td>{{$subscription->quantity}} €</td>
                                                    <td>
                                                        <form action="{{route('subs.remove')}}" method="POST">
                                                        @csrf
                                                            <input type="hidden" name="sub_id" value="{{$subscription->id}}">
                                                            <input type="submit" name="btn" class="btn btn-link byn-sm text-danger" value="X">
                                                        </form>
                                                    </td>
                                                    <td><form action="https://www.paypal.com/signin" method="post">
                                                        @csrf
                                                        <input type="submit" name="btn" class="btn btn-success btn-block" value="PAGAR CON PAYPAL"></form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        @else
                                        <p>No hay pedidos pendientes</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- FIN Contenedor principal -->
                            <div class="card-footer ml-auto mr-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection