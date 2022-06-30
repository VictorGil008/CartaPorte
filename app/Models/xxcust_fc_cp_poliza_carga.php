<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class xxcust_fc_cp_poliza_carga extends Model
{
    //Se definen los campos segun la tabla en la base de datos
   protected $primaryKey = 'id_poliza_carga';
   protected $table = 'xxcust_fc_cp_poliza_cargas';
   protected $fillable = ['clave_vehiculo', 'nombre_aseguradora_carga', 'numero_poliza_carga'];
   protected $hidden = ['created_by', 'created_at', 'updated_by', 'updated_at', 'deleted_by', 'deleted_at'];

    //Definicion de las relaciones

    public function autotransporte()
    {
        return $this->belongsTo(xxcust_fc_cp_gestion_autotransporte::class, 'clave_vehiculo');
    }
}
