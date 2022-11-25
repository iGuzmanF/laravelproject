<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_sexo') }}
            {{ Form::text('nombre_sexo', $sexo->nombre_sexo, ['class' => 'form-control' . ($errors->has('nombre_sexo') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Sexo']) }}
            {!! $errors->first('nombre_sexo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>