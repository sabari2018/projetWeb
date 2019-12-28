<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentreMedicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centre_medicals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle');
            $table->string('adresse');
            $table->timestamp('horaire');

            $table->integer('type_centre_medical_id')->unsigned();
            $table->foreign('type_centre_medical_id')->references('id')->on('type_centre_medicals')
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
        Schema::dropIfExists('centre_medicals');
    }
}
