<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    //   
    public $table="commandes";

        public function users(){
    	return $this->belongsTo(App\User);
    } 

    public function table_items(){
    	return $this->hasMany(App\Table_item);
    } 


    public function items(){
    	return $this->belongsToMany(App\Item);
    } 

}
