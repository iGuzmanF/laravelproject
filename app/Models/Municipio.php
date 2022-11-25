<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Municipio
 *
 * @property $id
 * @property $departamentos_id
 * @property $nombre_municipio
 * @property $created_at
 * @property $updated_at
 *
 * @property Departamento $departamento
 * @property Establecimiento[] $establecimientos
 * @property Familiare[] $familiares
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Municipio extends Model
{
    
    static $rules = [
		'departamentos_id' => 'required',
		'nombre_municipio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['departamentos_id','nombre_municipio'];


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
    public function establecimientos()
    {
        return $this->hasMany('App\Models\Establecimiento', 'municipios_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function familiares()
    {
        return $this->hasMany('App\Models\Familiare', 'municipios_id', 'id');
    }
    

}
