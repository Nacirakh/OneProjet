<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandeItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {/*
        Schema::create('commande_items', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
       
        });
*/
        Schema::table('commande_items', function (Blueprint $table) {
            $table->integer('commande_id')->unsigned();
            $table->integer('item_id')->unsigned();
            $table->integer('qty');
            $table->decimal('prix_total_i');

            
            $table->foreign('commande_id')->references('id')->on('commandes');
            $table->foreign('item_id')->references('id')->on('items');

});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('commande_items');
        Schema::dropForeign(['commande_id']);
        Schema::dropForeign(['item_id']);
    }
}
