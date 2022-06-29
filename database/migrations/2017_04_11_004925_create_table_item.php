<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('etat');
            $table->timestamps();
            $table->integer('users_id')->unsigned();
            $table->foreing('users_id')->references('id')->on('users');
            $table->integer('commande_id')->unsigned();
            $table->foreing('commande_id')->references('id')->on('commandes');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('table_items');
    }
}
