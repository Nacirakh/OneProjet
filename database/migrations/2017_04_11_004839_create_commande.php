<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommande extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('commandes', function (Blueprint $table) {
            $table->increments('id');
        
                $table->date('date_res');
            $table->timestamps();

            
        });*/
     /*   Schema::table('commandes', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
      
            $table->foreign('user_id')->references('id')->on('users');

            
});
 Schema::table('commandes', function (Blueprint $table) {
        
            $table->integer('item_id')->unsigned();

            $table->foreign('item_id')->references('id')->on('items');

});
 Schema::table('commandes', function (Blueprint $table) {
      
            $table->integer('table_id')->unsigned();
           

            $table->foreign('table_id')->references('id')->on('table_items');
});
*/


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {  
        Schema::dropForeign(['user_id']);
        Schema::dropForeign(['item_id']);
        Schema::dropForeign(['table_id']);

        Schema::drop('commandes');
    }
}
