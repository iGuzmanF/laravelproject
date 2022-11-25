<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_departamento') }}
            {{ Form::text('nombre_departamento', $departamento->nombre_departamento, ['class' => 'form-control' . ($errors->has('nombre_departamento') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Departamento']) }}
            {!! $errors->first('nombre_departamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>