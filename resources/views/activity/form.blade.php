<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::text('dates', $activity->dates, ['class' => 'form-control' . ($errors->has('dates') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('dates', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id Test') }}
            {{ Form::text('id_tests', $activity->id_tests, ['class' => 'form-control' . ($errors->has('id_tests') ? ' is-invalid' : ''), 'placeholder' => 'I']) }}
            {!! $errors->first('id_tests', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id Archivos') }}
            {{ Form::text('id_medias', $activity->id_medias, ['class' => 'form-control' . ($errors->has('id_medias') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_medias', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id Calendario') }}
            {{ Form::text('id_calendars', $activity->id_calendars, ['class' => 'form-control' . ($errors->has('id_calendars') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_calendars', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id Ejercicio') }}
            {{ Form::text('id_excercises', $activity->id_excercises, ['class' => 'form-control' . ($errors->has('id_excercises') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_excercises', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>
