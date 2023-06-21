<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Archivo') }}
            {{ Form::text('archive', $mediafile->archive, ['class' => 'form-control' . ($errors->has('archive') ? ' is-invalid' : ''), 'placeholder' => 'Archive']) }}
            {!! $errors->first('archive', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $mediafile->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Género') }}
            {{ Form::text('genre', $mediafile->genre, ['class' => 'form-control' . ($errors->has('genre') ? ' is-invalid' : ''), 'placeholder' => 'Genre']) }}
            {!! $errors->first('genre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo') }}
            {{ Form::text('type', $mediafile->type, ['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => 'Type']) }}
            {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>
