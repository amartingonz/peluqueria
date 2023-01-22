<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cita
 *
 * @property $id
 * @property $usuario_id
 * @property $hora
 * @property $fecha
 * @property $anotacion
 * @property $realizado
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cita extends Model
{
    
    static $rules = [
		'usuario_id' => 'required',
		'hora' => 'required',
		'fecha' => 'required',
		'anotacion' => 'required',
		'realizado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['usuario_id','hora','fecha','anotacion','realizado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'usuario_id');
    }
    
  

}
