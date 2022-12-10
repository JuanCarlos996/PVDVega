<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sucursale
 *
 * @property $id
 * @property $nombre
 * @property $direccion
 * @property $cant_empleados
 * @property $empleado_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Empleado $empleado
 * @property Empresa[] $empresas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sucursale extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'direccion' => 'required',
		'cant_empleados' => 'required',
		'empleado_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','direccion','cant_empleados','empleado_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empleado()
    {
        return $this->hasOne('App\Models\Empleado', 'id', 'empleado_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empresas()
    {
        return $this->hasMany('App\Models\Empresa', 'sucursal_id', 'id');
    }
    

}
