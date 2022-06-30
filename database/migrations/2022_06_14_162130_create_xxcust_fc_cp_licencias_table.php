<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXxcustFcCpLicenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xxcust_fc_cp_licencias', function (Blueprint $table) {
            $table->id('id_licencia');
            $table->string('numero_operador');
            $table->foreign('numero_operador')->references('numero_operador')->on('xxcust_fc_cpgestion_operadors')->onUpdate('cascade')->onDelete('cascade');
            $table->string('numero_licencia');
            $table->dateTime('vigencia_licencia');
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
        Schema::dropIfExists('xxcust_fc_cp_licencias');
    }
}
