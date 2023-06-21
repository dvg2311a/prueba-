@extends('layouts.app')

@section('template_title')
    {{ $suscription->name ?? "{{ __('Show') Suscription" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Suscription</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('suscriptions.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Dates:</strong>
                            {{ $suscription->dates }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $suscription->price }}
                        </div>
                        <div class="form-group">
                            <strong>Type:</strong>
                            {{ $suscription->type }}
                        </div>
                        <div class="form-group">
                            <strong>Id Pays:</strong>
                            {{ $suscription->id_pays }}
                        </div>
                        <div class="form-group">
                            <strong>Id Activities:</strong>
                            {{ $suscription->id_activities }}
                        </div>
                        <div class="form-group">
                            <strong>Id Users:</strong>
                            {{ $suscription->id_users }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
