@extends('layouts.app')

@section('template_title')
    Paciente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Paciente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pacientes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Establecimientos Id</th>
										<th>Familiares Id</th>
										<th>Sexo Id</th>
										<th>Estadocivil Id</th>
										<th>Departamentos Id</th>
										<th>Municipios Id</th>
										<th>Primer Nombre</th>
										<th>Segundo Nombre</th>
										<th>Tercer Nombre</th>
										<th>Primer Apellido</th>
										<th>Segundo Apellido</th>
										<th>Apellido Casada</th>
										<th>Dui</th>
										<th>Fecha Nac</th>
										<th>Telefono</th>
										<th>Direccion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pacientes as $paciente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $paciente->establecimiento-> nombre_establecimiento }}</td>
											<td>{{ $paciente->familiare-> nombre." ".$paciente->familiare->apellido }}</td>
											<td>{{ $paciente->sexo-> nombre_sexo }}</td>
											<td>{{ $paciente->estadocivil -> nombre_estado }}</td>
											<td>{{ $paciente->departamento-> nombre_departamento}}</td>
											<td>{{ $paciente->municipio->nombre_municipio}}</td>
											<td>{{ $paciente->primer_nombre }}</td>
											<td>{{ $paciente->segundo_nombre }}</td>
											<td>{{ $paciente->tercer_nombre }}</td>
											<td>{{ $paciente->primer_apellido }}</td>
											<td>{{ $paciente->segundo_apellido }}</td>
											<td>{{ $paciente->apellido_casada }}</td>
											<td>{{ $paciente->dui }}</td>
											<td>{{ $paciente->fecha_nac }}</td>
											<td>{{ $paciente->telefono }}</td>
											<td>{{ $paciente->direccion }}</td>

                                            <td>
                                                <form action="{{ route('pacientes.destroy',$paciente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pacientes.show',$paciente->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pacientes.edit',$paciente->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $pacientes->links() !!}
            </div>
        </div>
    </div>
@endsection
