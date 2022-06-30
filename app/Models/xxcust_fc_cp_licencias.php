<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class xxcust_fc_cp_licencias extends Model
{
        //Se definen los campos segun la tabla en la base de datos
   protected $primaryKey = 'id_licencia';
   protected $table = 'xxcust_fc_cp_licencias';
   protected $fillable = ['numero_operador', 'numero_licencia', 'vigencia_licencia'];
   protected $hidden = ['created_by', 'created_at', 'updated_by', 'updated_at', 'deleted_by', 'deleted_at'];
   protected $casts = [
    'vigencia_licencia' => 'datetime:d-m-Y H:i:s'];

    //Definicion de las relaciones

    public function operadores()
    {
        return $this->belongsTo( xxcust_fc_cp_gestion_operador::class, 'numero_operador');
    }
}
