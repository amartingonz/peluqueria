<?php

namespace App\Models;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


/**
 * Class Cliente
 *
 * @property $id
 * @property $nombre
 * @property $apellidos
 * @property $telefono
 * @property $email
 * @property $created_at
 * @property $updated_at
 *
 * @property Cita[] $citas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'nombre' => 'required | max:20 | alpha',
		'apellidos' => 'required | max:30 | regex:/^[\pL\s\-]+$/u',
		'telefono' => 'required|min:10|numeric',
		'email' => 'required | email:rfc,dns',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellidos','telefono','email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function citas()
    {
        return $this->hasMany('App\Models\Cita', 'usuario_id', 'id');
    }
    
    public static function getAll(){
      $clientes = DB::select('SELECT id,nombre FROM clientes');
      return $clientes;
  }
  
}
