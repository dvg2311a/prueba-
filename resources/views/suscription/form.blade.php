<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::text('dates', $suscription->dates, ['class' => 'form-control' . ($errors->has('dates') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('dates', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio') }}
            {{ Form::text('price', $suscription->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo') }}
            {{ Form::text('type', $suscription->type, ['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id Pago') }}
            {{ Form::text('id_pays', $suscription->id_pays, ['class' => 'form-control' . ($errors->has('id_pays') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_pays', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id Actividades') }}
            {{ Form::text('id_activities', $suscription->id_activities, ['class' => 'form-control' . ($errors->has('id_activities') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_activities', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id Usuarios') }}
            {{ Form::text('id_users', $suscription->id_users, ['class' => 'form-control' . ($errors->has('id_users') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_users', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>
