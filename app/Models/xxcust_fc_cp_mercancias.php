<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class xxcust_fc_cp_mercancias extends Model
{
     //Se definen los campos segun la tabla en la base de datos
     protected $primaryKey = 'id_seccion_mercancias';
     protected $table = 'xxcust_fc_cp_mercancias';
     protected $fillable = ['id_seccion_ubicacion', 'envio_id', 'partida_id', 'peso_bruto_total_mercancia', 'unidad_peso_mercancia', 'num_total_mercancia', 'bienes_transp_mercancia', 'descripción_mercancia', 'cantidad_mercancia', 'clave_unidad_mercancia', 'unidad_mercancia', 'dimensiones_mercancia', 'material_peligroso_mercancia', 'peso_kg_mercancia', 'valor_mercancia', 'moneda_mercancia', 'cantidad_transporta', 'id_origen_transporta', 'id_destino_transporta'];
     protected $hidden = ['created_by', 'created_at', 'updated_by', 'updated_at', 'deleted_by', 'deleted_at'];
    
      //Definicion de las relaciones
     public function ubicacion()
     {
          return $this->belongsTo(xxcust_fc_cp_ubicacion::class, 'id_seccion_ubicacion');
     }
}
