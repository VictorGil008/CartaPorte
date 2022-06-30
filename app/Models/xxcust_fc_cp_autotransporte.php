<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class xxcust_fc_cp_autotransporte extends Model
{
    //Se definen los campos segun la tabla en la base de datos
    protected $primaryKey = 'id_seccion_at';
    protected $table = 'xxcust_fc_cp_autotransportes';
    protected $fillable = ['id_seccion_ubicacion', 'perm_sct_at', 'num_permiso_sct_at', 'config_vehicular_at', 'placa_vm_at', 'ano_modelo_vm_at', 'nombre_aseg_resp_at', 'poliza_resp_at', 'nombre_aseg_carga_at', 'poliza_carga_at', 'subtipo_remolque_at', 'placa_remolque_at'];
    protected $hidden = ['created_by', 'created_at', 'updated_by', 'updated_at', 'deleted_by', 'deleted_at'];
   
     //Definicion de las relaciones
    public function ubicacion()
    {
         return $this->belongsTo(xxcust_fc_cp_ubicacion::class, 'id_seccion_ubicacion');
    }
}
