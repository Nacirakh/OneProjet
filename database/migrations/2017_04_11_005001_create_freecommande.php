<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFreecommande extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('freecommandes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('article');
            $table->date('date_resf');


            $table->timestamps();

        });
         Schema::table('freecommandes', function (Blueprint $table) {
                        $table->integer('user_id')->unsigned();

                        $table->foreign('user_id')->references('id')->on('users');


});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('freecommandes');
        Schema::dropForeign(['user_id']);
    }
}
