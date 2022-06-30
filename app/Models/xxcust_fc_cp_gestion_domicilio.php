<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class xxcust_fc_cp_gestion_domicilio extends Model
{
    //Se definen los campos segun la tabla en la base de datos
    protected $primaryKey = 'id_gestion_domicilio';
    protected $table = 'xxcust_fc_cpgestion_domicilio';
    protected $fillable = ['id_enlace_domicilio', 'tipo_domicilio', 'nombre_domicilio', 'calle_domicilio', 'numero_ext_domicilio', 'numero_int_domicilio', 'referencia_domicilio', 'cp_domicilio', 'clave_colonia_domicilio', 'clave_localidad_domicilio', 'clave_municipio_domicilio', 'clave_estado_domicilio', 'clave_pais_domicilio'];
    protected $hidden = ['created_by', 'created_at', 'updated_by', 'updated_at', 'deleted_by', 'deleted_at'];
}
