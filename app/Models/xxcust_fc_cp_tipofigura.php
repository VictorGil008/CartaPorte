<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class xxcust_fc_cp_tipofigura extends Model
{
    //Se definen los campos segun la tabla en la base de datos
    protected $primaryKey = 'id_seccion_tpf';
    protected $table = 'xxcust_fc_cp_tipofigura';
    protected $fillable = ['id_seccion_ubicacion', 'tipofigura_tpf', 'rfc_tpf', 'num_licencia_tpf', 'nombre_operador_tpf', 'residencia_fiscal_tpf'];
    protected $hidden = ['created_by', 'created_at', 'updated_by', 'updated_at', 'deleted_by', 'deleted_at'];
   
     //Definicion de las relaciones
    public function ubicacion()
    {
         return $this->belongsTo(xxcust_fc_cp_ubicacion::class, 'id_seccion_ubicacion');
    }
}
