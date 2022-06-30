<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXxcustFcCpPlacasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xxcust_fc_cp_placas', function (Blueprint $table) {
            $table->id('id_placa');
            $table->string('clave_vehiculo');
            $table->foreign('clave_vehiculo')->references('clave_vehiculo')->on('xxcust_fc_cpgestion_autotran')->onUpdate('cascade')->onDelete('cascade');
            $table->string('placa');
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
        Schema::dropIfExists('xxcust_fc_cp_placas');
    }
}
