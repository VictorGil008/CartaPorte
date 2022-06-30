<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXxcustFcCpPolizaCivilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xxcust_fc_cp_poliza_civils', function (Blueprint $table) {
            $table->id('id_poliza_civil');
            $table->string('clave_vehiculo');
            $table->foreign('clave_vehiculo')->references('clave_vehiculo')->on('xxcust_fc_cpgestion_autotran')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nombre_aseguradora_civil');
            $table->string('numero_poliza_civil');
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
        Schema::dropIfExists('xxcust_fc_cp_poliza_civils');
    }
}
