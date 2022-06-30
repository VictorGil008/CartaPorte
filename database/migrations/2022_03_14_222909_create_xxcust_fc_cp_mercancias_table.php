<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXxcustFcCpMercanciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xxcust_fc_cp_mercancias', function (Blueprint $table) {
            $table->id('id_seccion_mercancias');
            $table->foreignId('id_seccion_ubicacion')->constrained('xxcust_fc_cp_ubicacion', 'id_seccion_ubicacion')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('envio_id');
            $table->integer('partida_id');
            $table->string('peso_bruto_total_mercancia');
            $table->string('unidad_peso_mercancia');
            $table->integer('num_total_mercancia');
            $table->string('bienes_transp_mercancia');
            $table->string('descripción_mercancia', 250);
            $table->integer('cantidad_mercancia');
            $table->string('clave_unidad_mercancia', 10);
            $table->string('unidad_mercancia');
            $table->string('dimensiones_mercancia', 80);
            $table->string('material_peligroso_mercancia', 2);
            $table->string('peso_kg_mercancia');
            $table->double('valor_mercancia', 10, 2);
            $table->string('moneda_mercancia', 3);
            $table->integer('cantidad_transporta');
            $table->string('id_origen_transporta', 8);
            $table->string('id_destino_transporta', 8);
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
        Schema::dropIfExists('xxcust_fc_cp_mercancias');
    }
}
