<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXxcustFcCpComprobantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xxcust_fc_cp_comprobantes', function (Blueprint $table) {
            $table->id('id_seccion_comprobante');
            $table->foreignId('id_seccion_ubicacion')->constrained('xxcust_fc_cp_ubicacion', 'id_seccion_ubicacion')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('envio_id');
            $table->string('envio_num', 50)->nullable();
            $table->string('version_comprobante', 5);
            $table->dateTime('fecha_comprobante');
            $table->string('tipo_comprobante', 1);
            $table->string('subtotal_comprobante', 2);
            $table->string('moneda_comprobante', 5);
            $table->string('total_comprobante', 2);
            $table->string('rfc_receptor', 13);
            $table->string('usocfdi_receptor', 3);
            $table->string('clave_producto_concepto')->nullable();
            $table->string('clave_unidad_concepto', 3);
            $table->string('descripcion_concepto');
            $table->string('version_carta_porte', 4);
            $table->string('transpInternac_carta_porte', 2);
            $table->double('totaldistrec_carta_porte', 10, 2);
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
        Schema::dropIfExists('xxcust_fc_cp_comprobantes');
    }
}
