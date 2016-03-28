<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_utilisateur',100);
            $table->string('prenom_utilisateur',100);
            $table->string('pseudo', 60);
            $table->string('sexe', 5);
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('city');
            $table->string('telephone');
            $table->boolean('isTelephoneVisible');
            $table->string('url_photo',100);
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
