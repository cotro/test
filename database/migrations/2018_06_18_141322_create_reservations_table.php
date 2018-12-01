<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            //id User
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            //Id forfait
            $table->integer('forfait_id')->unsigned();
            $table->foreign('forfait_id')->references('id')->on('forfaits');
            //Id modules sous forme de string séparés par une virgule
            $table->string('modules_id');
            $table->dateTime('date_debut_location');
            $table->dateTime('date_fin_location');
            $table->integer('nombre_personnes');
            $table->integer('prix_total');
            $table->dateTime('date_creation_reservation');
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
        Schema::dropIfExists('reservations');
    }
}
