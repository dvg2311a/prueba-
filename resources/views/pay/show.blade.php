@extends('layouts.app')

@section('template_title')
    {{ $pay->name ?? "{{ __('Show') Pay" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar detalles de') }} Pago</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pays.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Cantidad de pago:</strong>
                            {{ $pay->payment }}
                        </div>
                        <div class="form-group">
                            <strong>Número de tarjeta:</strong>
                            {{ $pay->creditt_card_number }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $pay->dates }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
