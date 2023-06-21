<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {

            $table->increments('id');
            $table->date('dates');



             $table->integer('id_tests')->unsigned();
             $table->foreign('id_tests')->references('id')->
             on('tests')->onDelete('cascade')->onUpdate('cascade');


             $table->integer('id_medias')->unsigned();
             $table->foreign('id_medias')->references('id')->
             on('mediafiles')->onDelete('cascade')->onUpdate('cascade');


             $table->integer('id_calendars')->unsigned();
             $table->foreign('id_calendars')->references('id')->
             on('calendars')->onDelete('cascade')->onUpdate('cascade');


             $table->integer('id_excercises')->unsigned();
             $table->foreign('id_excercises')->references('id')->
             on('excercises')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('activities');
    }
}
