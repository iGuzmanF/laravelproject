<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('departamentos_id') }}
            {{ Form::select('departamentos_id',$departamentos, $establecimiento->departamentos_id, ['class' => 'form-control' . ($errors->has('departamentos_id') ? ' is-invalid' : ''), 'placeholder' => 'Departamentos Id']) }}
            {!! $errors->first('departamentos_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('municipios_id') }}
            {{ Form::select('municipios_id', $municipios, $establecimiento->municipios_id, ['class' => 'form-control' . ($errors->has('municipios_id') ? ' is-invalid' : ''), 'placeholder' => 'Municipios Id']) }}
            {!! $errors->first('municipios_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_establecimiento') }}
            {{ Form::text('nombre_establecimiento', $establecimiento->nombre_establecimiento, ['class' => 'form-control' . ($errors->has('nombre_establecimiento') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Establecimiento']) }}
            {!! $errors->first('nombre_establecimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $establecimiento->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>