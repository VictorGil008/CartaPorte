<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class xxcust_fc_cp_placas extends Model
{
    //Se definen los campos segun la tabla en la base de datos
   protected $primaryKey = 'id_placa';
   protected $table = 'xxcust_fc_cp_placas';
   protected $fillable = ['clave_vehiculo', 'placa'];
   protected $hidden = ['created_by', 'created_at', 'updated_by', 'updated_at', 'deleted_by', 'deleted_at'];

    //Definicion de las relaciones

    public function autotransporte()
    {
        return $this->belongsTo(xxcust_fc_cp_gestion_autotransporte::class, 'clave_vehiculo');
    }
}
