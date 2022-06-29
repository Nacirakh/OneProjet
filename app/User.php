<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

      
    
    public $table="users";
    public function commandes(){
        return $this->hasMany(App\Commande);
    } 

    public function table_items(){
        return $this->hasMany(App\Table_item);
    } 

    public function freecommandes(){
        return $this->hasMany(App\Freecommande);
    } 

    public function reserves(){
        return $this->hasMany('App\Reserve');

    } 
    
     
}
