@extends('layouts.app')

@section('template_title')
    Estadocivil
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Estadocivil') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('estadocivils.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($estadocivils as $estadocivil)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $estadocivil->nombre_estado }}</td>

                                            <td>
                                                <form action="{{ route('estadocivils.destroy',$estadocivil->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('estadocivils.show',$estadocivil->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('estadocivils.edit',$estadocivil->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $estadocivils->links() !!}
            </div>
        </div>
    </div>
@endsection
