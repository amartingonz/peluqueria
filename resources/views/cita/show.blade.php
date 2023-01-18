@extends('layouts.app')

@section('template_title')
    {{ $cita->name ?? 'Show Cita' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cita</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('citas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Usuario Id:</strong>
                            {{ $cita->usuario_id }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $cita->hora }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $cita->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Anotacion:</strong>
                            {{ $cita->anotacion }}
                        </div>
                        <div class="form-group">
                            <strong>Realizado:</strong>
                            {{ $cita->realizado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
