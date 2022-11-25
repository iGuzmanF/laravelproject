@extends('layouts.app')

@section('template_title')
    {{ $paciente->name ?? 'Show Paciente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Paciente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pacientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Establecimientos Id:</strong>
                            {{ $paciente->establecimientos_id }}
                        </div>
                        <div class="form-group">
                            <strong>Familiares Id:</strong>
                            {{ $paciente->familiares_id }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo Id:</strong>
                            {{ $paciente->sexo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Estadocivil Id:</strong>
                            {{ $paciente->estadocivil_id }}
                        </div>
                        <div class="form-group">
                            <strong>Departamentos Id:</strong>
                            {{ $paciente->departamentos_id }}
                        </div>
                        <div class="form-group">
                            <strong>Municipios Id:</strong>
                            {{ $paciente->municipios_id }}
                        </div>
                        <div class="form-group">
                            <strong>Primer Nombre:</strong>
                            {{ $paciente->primer_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo Nombre:</strong>
                            {{ $paciente->segundo_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Tercer Nombre:</strong>
                            {{ $paciente->tercer_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Primer Apellido:</strong>
                            {{ $paciente->primer_apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo Apellido:</strong>
                            {{ $paciente->segundo_apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Casada:</strong>
                            {{ $paciente->apellido_casada }}
                        </div>
                        <div class="form-group">
                            <strong>Dui:</strong>
                            {{ $paciente->dui }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nac:</strong>
                            {{ $paciente->fecha_nac }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $paciente->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $paciente->direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
