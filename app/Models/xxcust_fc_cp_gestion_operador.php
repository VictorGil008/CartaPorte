<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class xxcust_fc_cp_gestion_operador extends Model
{
    //Se definen los campos segun la tabla en la base de datos
   protected $keyType='string';
   public $incrementing = false;
   protected $primaryKey = 'numero_operador';
   protected $table = 'xxcust_fc_cpgestion_operadors';
   protected $fillable = ['numero_operador', 'nombre_completo_operador', 'rfc_operador' ];
   protected $hidden = ['created_by', 'created_at', 'updated_by', 'updated_at', 'deleted_by', 'deleted_at'];

    //Definicion de las relaciones

    public function licencia()
    {
        return $this->hasOne(xxcust_fc_cp_licencias::class, 'numero_operador');
    }

}
