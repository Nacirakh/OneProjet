<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table_item extends Model
{
  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'etat',
    ];
     public $table="table_items";

        public function users(){
    	return $this->belongsTo(App\User);
    } 

         public function commandes(){
    	return $this->belongsTo(App\Commande);
    } 
}
