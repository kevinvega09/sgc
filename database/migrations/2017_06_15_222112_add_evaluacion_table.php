<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEvaluacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('EVAL_PROM');
            $table->string('EVAL_OBSE');
            $table->decimal('EVAL_CALI');
            $table->decimal('EVAL_PAGO');
            $table->decimal('EVAL_PRECA');
            $table->decimal('EVAL_ENTR');
            $table->decimal('EVAL_POST');
            $table->date('EVAL_DATE');
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
        Schema::dropIfExists('evaluacion');
    }
}
