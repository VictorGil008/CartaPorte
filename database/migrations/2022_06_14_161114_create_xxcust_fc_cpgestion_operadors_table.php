<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXxcustFcCpgestionOperadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xxcust_fc_cpgestion_operadors', function (Blueprint $table) {
            $table->string('numero_operador')->primary();
            $table->string('nombre_completo_operador');
            $table->string('rfc_operador', 13);
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
        Schema::dropIfExists('xxcust_fc_cpgestion_operadors');
    }
}
