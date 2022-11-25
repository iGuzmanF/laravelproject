<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Establecimiento
 *
 * @property $id
 * @property $departamentos_id
 * @property $municipios_id
 * @property $nombre_establecimiento
 * @property $direccion
 * @property $created_at
 * @property $updated_at
 *
 * @property Departamento $departamento
 * @property Expediente[] $expedientes
 * @property Municipio $municipio
 * @property Paciente[] $pacientes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Establecimiento extends Model
{
    
    static $rules = [
		'departamentos_id' => 'required',
		'municipios_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['departamentos_id','municipios_id','nombre_establecimiento','direccion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departamento()
    {
        return $this->hasOne('App\Models\Departamento', 'id', 'departamentos_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function expedientes()
    {
        return $this->hasMany('App\Models\Expediente', 'establecimientos_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function municipio()
    {
        return $this->hasOne('App\Models\Municipio', 'id', 'municipios_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pacientes()
    {
        return $this->hasMany('App\Models\Paciente', 'establecimientos_id', 'id');
    }
    

}
