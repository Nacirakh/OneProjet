<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name','price','image','description'];
    
     public $table="items";
    public function commandes(){
    	return $this->belongsToMany(App\Commande);
    } 
    
}
