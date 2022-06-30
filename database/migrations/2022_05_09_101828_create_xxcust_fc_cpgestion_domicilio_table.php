<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXxcustFcCpgestionDomicilioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xxcust_fc_cpgestion_domicilio', function (Blueprint $table) {
            $table->id('id_gestion_domicilio');
            $table->string('id_enlace_domicilio', 3);
            $table->string('tipo_domicilio', 10);
            $table->string('nombre_domicilio', 50);
            $table->string('calle_domicilio', 340);
            $table->string('numero_ext_domicilio');
            $table->string('numero_int_domicilio')->nullable();
            $table->string('referencia_domicilio', 150)->nullable();
            $table->string('cp_domicilio', 5);
            $table->string('clave_colonia_domicilio', 4);
            $table->string('clave_localidad_domicilio', 2)->nullable();
            $table->string('clave_municipio_domicilio', 3);
            $table->string('clave_estado_domicilio', 3);
            $table->string('clave_pais_domicilio', 3);
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
        Schema::dropIfExists('xxcust_fc_cpgestion_domicilio');
    }
}
