<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEvalproovTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evalproov', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('EP_PROV')->unsigned();
            $table->integer('EP_USU')->unsigned();
            $table->integer('EP_EVAL')->unsigned();

            $table->foreign('EP_PROV')->references('id')->on('proveedores')->onDelete('cascade');
            $table->foreign('EP_USU')->references('id')->on('USUARIOS')->onDelete('cascade');
            $table->foreign('EP_EVAL')->references('id')->on('evaluacion')->onDelete('cascade');

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
        Schema::dropIfExists('evalproov');
    }
}
