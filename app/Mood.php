<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class mood extends Model {

  public function hasManyComments()
  {
    return $this->hasMany('App\Comment', 'mood_id', 'id');
  }

}