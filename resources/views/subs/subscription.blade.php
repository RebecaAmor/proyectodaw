@extends('layouts.main', ['activePage'=>'subscription', 'titlePage'=>'Suscripciones'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            @if (count(Cart::getContent()))
                                <a href="{{route('subs.checkout')}}">FINALIZAR PEDIDO <span class="badge badge-danger">{{count(Cart::getContent())}}</span>
                            @endif
                        </div>
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Suscripciones') }}</h4>
                                <p class="card-category">{{ __('Lista de suscripciones disponibles') }}</p>
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
                                        @forelse ($subscriptions as $subscription)
                                            <div class="col-4 border p-6 pt-3 text-center">
                                                <h4>{{$subscription->subname}}</h4>
                                                <p>{{$subscription->subtype}}</p>
                                                <p>{{$subscription->price}} €</p>
                                                <form action="{{route('subs.add')}}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="sub_id" value="{{$subscription->id}}">
                                                    <input type="submit" name="btn" class="btn btn-success" value="SUSCRÍBETE!">
                                                </form>
                                            </div>
                                        @empty
                                        @endforelse
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