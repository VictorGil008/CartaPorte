<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXxcustFcCpUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xxcust_fc_cp_users', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('zona', 4)->nullable();
            $table->string('region', 25)->nullable();
            $table->string('nombres', 100);
            $table->string('apellido_paterno', 100);
            $table->string('apellido_materno', 100);
            $table->string('clave_user', 50);
            $table->string('username', 50)->unique();
            $table->string('email', 50);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('verify_code', 40)->nullable();
            $table->string('password', 255);
            $table->rememberToken();
            $table->integer('created_by')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('deleted_by')->nullable();
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
        Schema::dropIfExists('xxcust_fc_cp_users');
    }
}
