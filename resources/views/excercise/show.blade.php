@extends('layouts.app')

@section('template_title')
    {{ $excercise->name ?? "{{ __('Show') Excercise" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Ejercicio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('excercises.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Ejercicio:</strong>
                            {{ $excercise->excercises }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $excercise->type }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
