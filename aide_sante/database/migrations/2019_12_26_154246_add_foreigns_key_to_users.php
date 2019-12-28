<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignsKeyToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->integer('medecin_id')->unsigned();
            $table->foreign('medecin_id')->references('id')->on('medecins')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->integer('abonne_id')->unsigned();
            $table->foreign('abonne_id')->references('id')->on('abonnes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->integer('type_user_id')->unsigned();
            $table->foreign('type_user_id')->references('id')->on('type_users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
