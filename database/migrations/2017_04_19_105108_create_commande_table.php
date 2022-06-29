<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      /*  Schema::create('commande_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            
        });*/

         Schema::table('commande_tables', function (Blueprint $table) {
            $table->integer('commande_id')->unsigned();
            $table->integer('table_id')->unsigned();
            $table->integer('qtyt');
            $table->foreign('commande_id')->references('id')->on('commandes');
            $table->foreign('table_id')->references('id')->on('table_items');


});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('commande_tables');
        Schema::dropForeign(['commande_id']);
        Schema::dropForeign(['table_id']);
    }
}
