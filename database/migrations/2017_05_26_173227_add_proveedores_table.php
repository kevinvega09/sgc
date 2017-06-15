<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
    {
        Schema::create('PROVEEDORES', function (Blueprint $table) {
            $table->increments('id');
            $table->string('PROV_NOMB', 30);
            $table->string('PROV_PROD', 30);
            $table->string('PROV_TELE', 30);
            $table->string('PROV_DIRE', 50);
            $table->string('PROV_CONT', 30);
            $table->string('PROV_MAIL', 30);
            $table->string('PROV_FPAGO', 20);
            $table->string('PROV_BANC', 30);
            $table->string('PROV_NCUEN', 30);
            $table->boolean('PROV_APRO');
            $table->boolean('PROV_ACTI');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proovedores');
    }
}
