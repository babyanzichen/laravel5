<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Play extends Model {

  public function hasManyComments()
	
    {
    return $this->hasMany('App\Comment', 'play_id', 'id');
  }
  
   
}
