<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('usuario_id') }}
            {{ Form::text('usuario_id', $cita->usuario_id, ['class' => 'form-control' . ($errors->has('usuario_id') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Id']) }}
            {!! $errors->first('usuario_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora') }}
            {{ Form::text('hora', $cita->hora, ['class' => 'form-control' . ($errors->has('hora') ? ' is-invalid' : ''), 'placeholder' => 'Hora']) }}
            {!! $errors->first('hora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $cita->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('anotacion') }}
            {{ Form::text('anotacion', $cita->anotacion, ['class' => 'form-control' . ($errors->has('anotacion') ? ' is-invalid' : ''), 'placeholder' => 'Anotacion']) }}
            {!! $errors->first('anotacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('realizado') }}
            {{ Form::text('realizado', $cita->realizado, ['class' => 'form-control' . ($errors->has('realizado') ? ' is-invalid' : ''), 'placeholder' => 'Realizado']) }}
            {!! $errors->first('realizado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>