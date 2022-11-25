<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('departamentos_id') }}
            {{ Form::select('departamentos_id', $departamentos, $familiare->departamentos_id, ['class' => 'form-control' . ($errors->has('departamentos_id') ? ' is-invalid' : ''), 'placeholder' => 'Departamentos Id']) }}
            {!! $errors->first('departamentos_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('municipios_id') }}
            {{ Form::select('municipios_id', $municipios, $familiare->municipios_id, ['class' => 'form-control' . ($errors->has('municipios_id') ? ' is-invalid' : ''), 'placeholder' => 'Municipios Id']) }}
            {!! $errors->first('municipios_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $familiare->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido') }}
            {{ Form::text('apellido', $familiare->apellido, ['class' => 'form-control' . ($errors->has('apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('parentesco') }}
            {{ Form::text('parentesco', $familiare->parentesco, ['class' => 'form-control' . ($errors->has('parentesco') ? ' is-invalid' : ''), 'placeholder' => 'Parentesco']) }}
            {!! $errors->first('parentesco', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>