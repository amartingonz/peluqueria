<?php
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\ClienteController;
    $usuarios = HomeController::getAll();
    $clientes = ClienteController::getAllClientes();
    $array_usuarios = [];
    $array_clientes = [];
?>

@foreach($usuarios as $usuario)
    <?php $array_usuarios[$usuario -> id] = $usuario -> name;?>
@endforeach

@foreach($clientes as $cliente)
    <?php $array_clientes[$cliente -> id] = $cliente -> nombre;?>
@endforeach





<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cliente_id') }}
            {{ Form::select('usuario_id', $array_clientes, ['class' => 'form-control' . ($errors->has('usuario_id') ? ' is-invalid' : ''), 'value' => $array_clientes]) }}
            {!! $errors->first('usuario_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora') }}
            {{ Form::time('hora', $cita->hora, ['class' => 'form-control' . ($errors->has('hora') ? ' is-invalid' : ''), 'placeholder' => 'Hora']) }}
            {!! $errors->first('hora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::date('fecha', $cita->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('anotacion') }}
            {{ Form::text('anotacion', Auth::id(), ['class' => 'form-control' . ($errors->has('anotacion') ? ' is-invalid' : ''), 'placeholder' => Auth::id(), 'value' => Auth::id(), 'readonly']) }}
            {!! $errors->first('anotacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('realizado') }}
            {{ Form::select('realizado', $array_usuarios, ['class' => 'form-control' . ($errors->has('realizado') ? ' is-invalid' : ''), 'value' => $array_usuarios]) }}
            {!! $errors->first('realizado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>