<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class xxcust_fc_cp_gestion_autotransporte extends Model
{
   //Se definen los campos segun la tabla en la base de datos
   protected $keyType='string';
   public $incrementing = false;
   protected $primaryKey = 'clave_vehiculo';
   protected $table = 'xxcust_fc_cpgestion_autotran';
   protected $fillable = ['clave_vehiculo', 'permiso_sct', 'numero_permiso_sct', 'clave_configuracion_vehicular', 'ano_modelo' ];
   protected $hidden = ['created_by', 'created_at', 'updated_by', 'updated_at', 'deleted_by', 'deleted_at'];

   //Definicion de las relaciones

   public function placa()
   {
       return $this->hasOne(xxcust_fc_cp_placas::class, 'clave_vehiculo');
   }

   public function polizaCarga()
   {
       return $this->hasOne(xxcust_fc_cp_poliza_carga::class, 'clave_vehiculo');
   }

   public function polizaCivil()
   {
       return $this->hasOne(xxcust_fc_cp_poliza_civil::class, 'clave_vehiculo');
   }
}
