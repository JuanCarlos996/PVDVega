<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresa
 *
 * @property $id
 * @property $nombre
 * @property $direccion
 * @property $cant_empleados
 * @property $empleado_id
 * @property $sucursal_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Empleado $empleado
 * @property Sucursale $sucursale
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empresa extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'direccion' => 'required',
		'cant_empleados' => 'required',
		'empleado_id' => 'required',
		'sucursal_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','direccion','cant_empleados','empleado_id','sucursal_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empleado()
    {
        return $this->hasOne('App\Models\Empleado', 'id', 'empleado_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sucursale()
    {
        return $this->hasOne('App\Models\Sucursale', 'id', 'sucursal_id');
    }
    

}
