<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXxcustFcCpUbicacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xxcust_fc_cp_ubicacion', function (Blueprint $table) {
            $table->id('id_seccion_ubicacion');
            $table->string('tipo_origen_ubicacion', 10);
            $table->string('id_origen_ubicacion', 8);
            $table->string('rfc_origen_ubicacion', 13);
            $table->string('nomb_remit_origen_ubicacion', 50); 
            $table->dateTime('fecha_origen_ubicacion');
            $table->string('tipo_destino_ubicacion', 10);
            $table->string('id_destino_ubicacion', 8);
            $table->string('rfc_destino_ubicacion', 13);
            $table->string('nomb_remit_destino_ubicacion', 50); 
            $table->dateTime('fecha_destino_ubicacion');
            $table->double('dist_recorr_destino_ubicacion', 10, 2); 
            $table->string('calle_origen_domicilio', 340);
            $table->string('numero_ext_origen_domicilio');
            $table->string('numero_int_origen_domicilio')->nullable();
            $table->string('colonia_origen_domicilio', 4);
            $table->string('localidad_origen_domicilio', 2);
            $table->string('referencia_origen_domicilio', 150)->nullable();
            $table->string('municipio_origen_domicilio', 3);
            $table->string('estado_origen_domicilio', 3);
            $table->string('pais_origen_domicilio', 3);
            $table->string('cp_origen_domicilio', 5);
            $table->string('calle_destino_domicilio', 340);
            $table->string('numero_ext_destino_domicilio');
            $table->string('numero_int_destino_domicilio')->nullable();
            $table->string('colonia_destino_domicilio', 4);
            $table->string('localidad_destino_domicilio', 2);
            $table->string('referencia_destino_domicilio', 150)->nullable();
            $table->string('municipio_destino_domicilio', 3);
            $table->string('estado_destino_domicilio', 3);
            $table->string('pais_destino_domicilio', 3);
            $table->string('cp_destino_domicilio', 5);
            $table->bigInteger('created_by')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->bigInteger('updated_by')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->bigInteger('deleted_by')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xxcust_fc_cp_ubicacion');
    }
}
