<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Pregunta 1') }}
            {{ Form::text('task1', $test->task1, ['class' => 'form-control' . ($errors->has('task1') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('task1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pregunta 2') }}
            {{ Form::text('task3', $test->task3, ['class' => 'form-control' . ($errors->has('task3') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('task3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pregunta 3') }}
            {{ Form::text('task4', $test->task4, ['class' => 'form-control' . ($errors->has('task4') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('task4', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pregunta 4') }}
            {{ Form::text('task5', $test->task5, ['class' => 'form-control' . ($errors->has('task5') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('task5', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pregunta 5') }}
            {{ Form::text('task6', $test->task6, ['class' => 'form-control' . ($errors->has('task6') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('task6', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pregunta 6') }}
            {{ Form::text('task7', $test->task7, ['class' => 'form-control' . ($errors->has('task7') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('task7', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>
