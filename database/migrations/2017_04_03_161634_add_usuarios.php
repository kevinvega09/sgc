<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('USUARIOS', function (Blueprint $table) {
            $table->increments('id');
            $table->string('USUA_NOMB', 30);
            $table->string('USUA_TIPO', 10);
            $table->boolean('USUA_ACTI');
            $table->string('USUA_MAIL', 30);
            $table->string('USUA_CARGO', 30);
            $table->string('USUA_PASS', 60);
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
        Schema::dropIfExists('USUARIOS');
    }
}
