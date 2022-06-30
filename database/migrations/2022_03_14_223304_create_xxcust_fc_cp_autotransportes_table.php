<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXxcustFcCpAutotransportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xxcust_fc_cp_autotransportes', function (Blueprint $table) {
            $table->id('id_seccion_at');
            $table->foreignId('id_seccion_ubicacion')->constrained('xxcust_fc_cp_ubicacion', 'id_seccion_ubicacion')->onUpdate('cascade')->onDelete('cascade');
            $table->string('perm_sct_at', 120);
            $table->string('num_permiso_sct_at');
            $table->string('config_vehicular_at', 250);
            $table->string('placa_vm_at');
            $table->string('ano_modelo_vm_at', 4);
            $table->string('nombre_aseg_resp_at');
            $table->string('poliza_resp_at');
            $table->string('nombre_aseg_carga_at');
            $table->string('poliza_carga_at');
            $table->string('subtipo_remolque_at')->nullable();
            $table->string('placa_remolque_at')->nullable();
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
        Schema::dropIfExists('xxcust_fc_cp_autotransportes');
    }
}
