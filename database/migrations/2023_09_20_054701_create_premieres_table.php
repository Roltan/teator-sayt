<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePremieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('premiere', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('time');
            $table->string('age');
            $table->string('name');
            $table->text('coment');

            $table->string('baner');
            $table->string('length');
            $table->text('text');
            $table->string('coleckiv');
            $table->string('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('premieres');
    }
}
