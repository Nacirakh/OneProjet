<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
	   public $table="reserves";

    public function users() {
    	return $this->belongsTo(App\User);
    }
}
