<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class xxcust_fc_cp_comprobante extends Model
{
     //Se definen los campos segun la tabla en la base de datos
     protected $primaryKey = 'id_seccion_comprobante';
     protected $table = 'xxcust_fc_cp_comprobantes';
     protected $fillable = ['id_seccion_ubicacion', 'envio_id', 'envio_num', 'version_comprobante', 'fecha_comprobante', 'tipo_comprobante', 'subtotal_comprobante', 'moneda_comprobante', 'total_comprobante', 'rfc_receptor', 'usocfdi_receptor', 'clave_producto_concepto', 'clave_unidad_concepto', 'descripcion_concepto', 'version_carta_porte', 'transpInternac_carta_porte', 'totaldistrec_carta_porte'];
     protected $hidden = ['created_by', 'created_at', 'updated_by', 'updated_at', 'deleted_by', 'deleted_at'];
     protected $casts = [
          'fecha_comprobante' => 'datetime:Y-m-d H:i:s'];
    
      //Definicion de las relaciones
     public function ubicacion()
     {
          return $this->belongsTo(xxcust_fc_cp_ubicacion::class, 'id_seccion_ubicacion');
     }
}
