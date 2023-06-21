<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Pago') }}
            {{ Form::text('payment', $pay->payment, ['class' => 'form-control' . ($errors->has('payment') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('payment', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Número de tarjeta de crédito o débito') }}
            {{ Form::text('creditt_card_number', $pay->creditt_card_number, ['class' => 'form-control' . ($errors->has('creditt_card_number') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('creditt_card_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::text('dates', $pay->dates, ['class' => 'form-control' . ($errors->has('dates') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('dates', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>
