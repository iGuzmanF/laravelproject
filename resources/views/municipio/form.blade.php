<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('departamentos_id') }}
            {{ Form::select('departamentos_id',$departamentos,$municipio->departamentos_id, ['class' => 'form-control' . ($errors->has('departamentos_id') ? ' is-invalid' : ''), 'placeholder' => 'Departamentos Id']) }}
            {!! $errors->first('departamentos_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_municipio') }}
            {{ Form::text('nombre_municipio', $municipio->nombre_municipio, ['class' => 'form-control' . ($errors->has('nombre_municipio') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Municipio']) }}
            {!! $errors->first('nombre_municipio', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>