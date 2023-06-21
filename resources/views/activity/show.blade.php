@extends('layouts.app')

@section('template_title')
    {{ $activity->name ?? "{{ __('Show') Activity" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Actividades</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('activities.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $activity->dates }}
                        </div>
                        <div class="form-group">
                            <strong>Id Test</strong>
                            {{ $activity->id_tests }}
                        </div>
                        <div class="form-group">
                            <strong>Id Archivos:</strong>
                            {{ $activity->id_medias }}
                        </div>
                        <div class="form-group">
                            <strong>Id Calendario:</strong>
                            {{ $activity->id_calendars }}
                        </div>
                        <div class="form-group">
                            <strong>Id Ejercicio:</strong>
                            {{ $activity->id_excercises }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
