<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class xxcust_fc_cp_ubicacion extends Model
{
     //Se definen los campos segun la tabla en la base de datos
     protected $primaryKey = 'id_seccion_ubicacion';
     protected $table = 'xxcust_fc_cp_ubicacion';
     protected $fillable = ['tipo_origen_ubicacion', 'id_origen_ubicacion', 'rfc_origen_ubicacion', 'nomb_remit_origen_ubicacion', 'fecha_origen_ubicacion', 'tipo_destino_ubicacion', 'id_destino_ubicacion', 'rfc_destino_ubicacion', 'nomb_remit_destino_ubicacion', 'fecha_destino_ubicacion', 'dist_recorr_destino_ubicacion', 'calle_origen_domicilio', 'numero_ext_origen_domicilio', 'numero_int_origen_domicilio', 'colonia_origen_domicilio', 'localidad_origen_domicilio', 'referencia_origen_domicilio', 'municipio_origen_domicilio', 'estado_origen_domicilio', 'pais_origen_domicilio', 'cp_origen_domicilio', 'calle_destino_domicilio', 'numero_ext_destino_domicilio', 'numero_int_destino_domicilio', 'colonia_destino_domicilio', 'localidad_destino_domicilio', 'referencia_destino_domicilio', 'municipio_destino_domicilio', 'estado_destino_domicilio', 'pais_destino_domicilio', 'cp_destino_domicilio'];
     protected $hidden = ['created_by', 'created_at', 'updated_by', 'updated_at', 'deleted_by', 'deleted_at'];
     protected $casts = [
        'fecha_origen_ubicacion' => 'datetime:Y-m-d H:i:s', 'fecha_destino_ubicacion' => 'datetime:Y-m-d H:i:s',
    ];

    //Definicion de las relaciones
    public function comprobante()
   {
       return $this->hasMany(xxcust_fc_cp_comprobante::class, 'id_seccion_ubicacion');
   }

   public function mercancia()
   {
       return $this->hasMany(xxcust_fc_cp_mercancias::class, 'id_seccion_ubicacion');
   }

   public function autotransporte()
   {
       return $this->hasOne(xxcust_fc_cp_autotransporte::class, 'id_seccion_ubicacion');
   }

   public function tipofigura()
   {
       return $this->hasOne(xxcust_fc_cp_tipofigura::class, 'id_seccion_ubicacion');
   }
}
