@extends('layouts.app')

@section('template_title')
    {{ $expediente->name ?? 'Show Expediente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Expediente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('expedientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Establecimientos Id:</strong>
                            {{ $expediente->establecimientos_id }}
                        </div>
                        <div class="form-group">
                            <strong>Pacientes Id:</strong>
                            {{ $expediente->pacientes_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
