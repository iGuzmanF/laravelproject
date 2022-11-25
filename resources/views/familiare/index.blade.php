@extends('layouts.app')

@section('template_title')
    Familiare
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Familiare') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('familiares.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Departamentos Id</th>
										<th>Municipios Id</th>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Parentesco</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($familiares as $familiare)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $familiare->departamento->nombre_departamento }}</td>
											<td>{{ $familiare->municipio->nombre_municipio}}</td>
											<td>{{ $familiare->nombre }}</td>
											<td>{{ $familiare->apellido }}</td>
											<td>{{ $familiare->parentesco }}</td>

                                            <td>
                                                <form action="{{ route('familiares.destroy',$familiare->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('familiares.show',$familiare->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('familiares.edit',$familiare->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $familiares->links() !!}
            </div>
        </div>
    </div>
@endsection
