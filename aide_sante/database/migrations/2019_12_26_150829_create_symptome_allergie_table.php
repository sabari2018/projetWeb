<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSymptomeAllergieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('symptome_allergie', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('symptome_id')->unsigned();
            $table->foreign('symptome_id')->references('id')->on('symptomes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->integer('allergie_id')->unsigned();
            $table->foreign('allergie_id')->references('id')->on('allergies')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('symptome_allergie');
    }
}
