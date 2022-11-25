<div class="box box-info padding-1">
    <div class="box-body">
        
      <div class="form-group">
            {{ Form::label('establecimientos_id') }}
            {{ Form::select('establecimientos_id', $establecimientos, $paciente->establecimientos_id, ['class' => 'form-control' . ($errors->has('establecimientos_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un Establecimiento']) }}
            {!! $errors->first('establecimientos_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('familiares_id') }}
            {{ Form::select('familiares_id',$familiares, $paciente->familiares_id, ['class' => 'form-control' . ($errors->has('familiares_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un Familiar']) }}
            {!! $errors->first('familiares_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sexo_id') }}
            {{ Form::select('sexo_id', $sexos, $paciente->sexo_id, ['class' => 'form-control' . ($errors->has('sexo_id') ? ' is-invalid' : ''), 'placeholder' => 'Sexo Id']) }}
            {!! $errors->first('sexo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estadocivil_id') }}
            {{ Form::select('estadocivil_id',$estadocivils, $paciente->estadocivil_id, ['class' => 'form-control' . ($errors->has('estadocivil_id') ? ' is-invalid' : ''), 'placeholder' => 'Estadocivil Id']) }}
            {!! $errors->first('estadocivil_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('departamentos_id') }}
            {{ Form::select('departamentos_id', $departamentos, $paciente->departamentos_id, ['class' => 'form-control' . ($errors->has('departamentos_id') ? ' is-invalid' : ''), 'placeholder' => 'Departamentos Id']) }}
            {!! $errors->first('departamentos_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('municipios_id') }}
            {{ Form::select('municipios_id',$municipios, $paciente->municipios_id, ['class' => 'form-control' . ($errors->has('municipios_id') ? ' is-invalid' : ''), 'placeholder' => 'Municipios Id']) }}
            {!! $errors->first('municipios_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('primer_nombre') }}
            {{ Form::text('primer_nombre', $paciente->primer_nombre, ['class' => 'form-control' . ($errors->has('primer_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Primer Nombre']) }}
            {!! $errors->first('primer_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('segundo_nombre') }}
            {{ Form::text('segundo_nombre', $paciente->segundo_nombre, ['class' => 'form-control' . ($errors->has('segundo_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Segundo Nombre']) }}
            {!! $errors->first('segundo_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tercer_nombre') }}
            {{ Form::text('tercer_nombre', $paciente->tercer_nombre, ['class' => 'form-control' . ($errors->has('tercer_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Tercer Nombre']) }}
            {!! $errors->first('tercer_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('primer_apellido') }}
            {{ Form::text('primer_apellido', $paciente->primer_apellido, ['class' => 'form-control' . ($errors->has('primer_apellido') ? ' is-invalid' : ''), 'placeholder' => 'Primer Apellido']) }}
            {!! $errors->first('primer_apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('segundo_apellido') }}
            {{ Form::text('segundo_apellido', $paciente->segundo_apellido, ['class' => 'form-control' . ($errors->has('segundo_apellido') ? ' is-invalid' : ''), 'placeholder' => 'Segundo Apellido']) }}
            {!! $errors->first('segundo_apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido_casada') }}
            {{ Form::text('apellido_casada', $paciente->apellido_casada, ['class' => 'form-control' . ($errors->has('apellido_casada') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Casada']) }}
            {!! $errors->first('apellido_casada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dui') }}
            {{ Form::number('dui', $paciente->dui, ['class' => 'form-control' . ($errors->has('dui') ? ' is-invalid' : ''), 'placeholder' => 'Dui']) }}
            {!! $errors->first('dui', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_nac') }}
            {{ Form::date('fecha_nac', $paciente->fecha_nac, ['class' => 'form-control' . ($errors->has('fecha_nac') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nac']) }}
            {!! $errors->first('fecha_nac', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $paciente->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $paciente->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>