@extends('layouts.app')

@section('template_title')
    {{ $familiare->name ?? 'Show Familiare' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Familiare</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('familiares.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Departamentos Id:</strong>
                            {{ $familiare->departamentos_id }}
                        </div>
                        <div class="form-group">
                            <strong>Municipios Id:</strong>
                            {{ $familiare->municipios_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $familiare->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $familiare->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Parentesco:</strong>
                            {{ $familiare->parentesco }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
