<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salles', function (Blueprint $table) {
            $table->increments('id');
            //Pour appeler une clé étrangère
            //id User
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            //Id forfait
            $table->integer('forfait_id')->unsigned();
            $table->foreign('forfait_id')->references('id')->on('forfaits');
            //Id module
        
            $table->timestamps();
            $table->string('name');
            $table->string('city');
            $table->string('address');
            $table->string('postalCode');
            $table->integer('nombrePlace');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salles');
    }
}
