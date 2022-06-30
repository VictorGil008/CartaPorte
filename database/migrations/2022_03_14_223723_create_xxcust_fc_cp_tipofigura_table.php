<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXxcustFcCpTipofiguraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xxcust_fc_cp_tipofigura', function (Blueprint $table) {
            $table->id('id_seccion_tpf');
            $table->foreignId('id_seccion_ubicacion')->constrained('xxcust_fc_cp_ubicacion', 'id_seccion_ubicacion')->onUpdate('cascade')->onDelete('cascade');
            $table->string('tipofigura_tpf', 2);
            $table->string('rfc_tpf', 13);
            $table->string('num_licencia_tpf');
            $table->string('nombre_operador_tpf');
            $table->string('residencia_fiscal_tpf', 8);
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
        Schema::dropIfExists('xxcust_fc_cp_tipofigura');
    }
}
