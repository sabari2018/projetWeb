<?php

use App\TypeUser;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertDefautltData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::table('type_users')->insert(
            [
                ['libelle' => 'admin'],
                ['libelle' => 'abonne']
            ]
        );

        DB::table('users')->insert(
          [
             'email' => 'admin@gmail.com',
             'password' => bcrypt('123456'),
              'type_user_id' => 1
           ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
