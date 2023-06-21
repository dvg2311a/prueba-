<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dates');
            $table->string('price');
            $table->string('type');

            $table->integer('id_pays')->unsigned();
            $table->foreign('id_pays')->references('id')->
            on('pays')->onDelete('cascade')->onUpdate('cascade');



            $table->integer('id_activities')->unsigned();
            $table->foreign('id_activities')->references('id')->
            on('activities')->onDelete('cascade')->onUpdate('cascade');


            $table->integer('id_users')->unsigned();
            $table->foreign('id_users')->references('id')->
            on('users')->onDelete('cascade')->onUpdate('cascade');



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
        Schema::dropIfExists('suscriptions');
    }
}
