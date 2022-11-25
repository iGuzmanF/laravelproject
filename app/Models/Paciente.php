<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paciente
 *
 * @property $establecimientos_id
 * @property $familiares_id
 * @property $sexo_id
 * @property $estadocivil_id
 * @property $departamentos_id
 * @property $municipios_id
 * @property $id
 * @property $primer_nombre
 * @property $segundo_nombre
 * @property $tercer_nombre
 * @property $primer_apellido
 * @property $segundo_apellido
 * @property $apellido_casada
 * @property $dui
 * @property $fecha_nac
 * @property $telefono
 * @property $direccion
 * @property $created_at
 * @property $updated_at
 *
 * @property Departamento $departamento
 * @property Establecimiento $establecimiento
 * @property Estadocivil $estadocivil
 * @property Expediente[] $expedientes
 * @property Familiare $familiare
 * @property Municipio $municipio
 * @property Sexo $sexo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paciente extends Model
{
    
    static $rules = [
		'establecimientos_id' => 'required',
		'familiares_id' => 'required',
		'sexo_id' => 'required',
		'estadocivil_id' => 'required',
		'departamentos_id' => 'required',
		'municipios_id' => 'required',
		'primer_nombre' => 'required',
		'fecha_nac' => 'required',
		'telefono' => 'required',
		'direccion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['establecimientos_id','familiares_id','sexo_id','estadocivil_id','departamentos_id','municipios_id','primer_nombre','segundo_nombre','tercer_nombre','primer_apellido','segundo_apellido','apellido_casada','dui','fecha_nac','telefono','direccion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departamento()
    {
        return $this->hasOne('App\Models\Departamento', 'id', 'departamentos_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function establecimiento()
    {
        return $this->hasOne('App\Models\Establecimiento', 'id', 'establecimientos_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estadocivil()
    {
        return $this->hasOne('App\Models\Estadocivil', 'id', 'estadocivil_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function expedientes()
    {
        return $this->hasMany('App\Models\Expediente', 'pacientes_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function familiare()
    {
        return $this->hasOne('App\Models\Familiare', 'id', 'familiares_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function municipio()
    {
        return $this->hasOne('App\Models\Municipio', 'id', 'municipios_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sexo()
    {
        return $this->hasOne('App\Models\Sexo', 'id', 'sexo_id');
    }
    

}
